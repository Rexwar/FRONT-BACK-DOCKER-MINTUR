<?php

namespace App\Models\Establishments;

use App\Jobs\UpdateComponentAfterUpdateSubTopic;
use App\Jobs\UpdateFormAfterUpdateComponents;
use App\Jobs\UpdateSubTopicAfterUpdateQuestion;
use App\Models\Forms\Component;
use App\Models\Forms\Question;
use App\Models\Forms\SubTopic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Results extends Model
{
    use  SoftDeletes;

    const NO_APPLY='No Aplica';
    protected $fillable =
        [
            'establishment_id',
            'resultable_type',
            'resultable_id',
            'score',
            'intent_id',
            'answer',
        ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts =
        [
            'updated_at' => 'date:d-m-Y',
            'created_at' => 'date:d-m-Y',
        ];
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->resultable_type == Question::class && isset($model->getAttributes()['score'])) {
                $question = $model->resultable;
                if ($question->parent && $question->parent->children_type == 'una_opcion') {
                    $parent = $question->parent;
                    $resultParent = Results::where('resultable_id', $parent->id)
                        ->where('resultable_type', $model->resultable_type)
                        ->where('establishment_id', $model->establishment_id)
                        ->where('intent_id', $model->intent_id)->first();
                    $resultParent->score = $model->score;
                    $resultParent->save();
                    $children = $parent->children->where('id', '!=', $model->resultable_id);
                    if ($children) {
                        Results::whereIn('resultable_id', $children->pluck('id')->toArray())
                            ->where('establishment_id', $model->establishment_id)
                            ->where('intent_id', $model->intent_id)->update(['score' => 0]);
                    }
                }
            }
        });

        static::updated(function ($model) {
            if ($model->resultable_type == Question::class) {
                UpdateSubTopicAfterUpdateQuestion::dispatch($model);
            }
            if ($model->resultable_type == SubTopic::class) {
                UpdateComponentAfterUpdateSubTopic::dispatch($model);
            }
            if ($model->resultable_type == Component::class) {
                UpdateFormAfterUpdateComponents::dispatch($model);
            }
        });
    }


    /**
     * @return MorphTo
     */
    public function resultable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return BelongsTo
     */
    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }
}
