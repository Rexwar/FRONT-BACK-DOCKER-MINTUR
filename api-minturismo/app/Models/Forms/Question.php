<?php

namespace App\Models\Forms;

use App\Models\Establishments\EstablishmentType;
use App\Models\Establishments\Results;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Question extends Model
{
    use HasFactory, SoftDeletes, HasRecursiveRelationships;

    protected $fillable =
        [
            'code',
            'name',
            'type',
            'description',
            'parent_id',
            'value',
            'children_type',
            'importance',
            'verification_means',
            'has_score',
            'answer_required'
        ];

    protected $casts =
        [
            'updated_at' => 'date:d-m-Y',
            'created_at' => 'date:d-m-Y',
        ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($model){
            if ($model->children){
                $model->children->each->delete();
            }
        });
    }

    /**
     * @return BelongsTo
     */
    public function subTopic(): BelongsTo
    {
        return $this->belongsTo(SubTopic::class);
    }


    /**
     * @return BelongsTo
     */
    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }

    /**
     * Get results
     *
     * @return MorphMany
     */
    public function results(): MorphMany
    {
        return $this->morphMany(Results::class, 'resultable');
    }

    /**
     * @return BelongsToMany
     */
    public function subTopics(): BelongsToMany
    {
        return $this->belongsToMany(SubTopic::class, 'question_sub_topic', 'question_id', 'sub_topic_id')->orderBy('id','asc');
    }

    /**
     * @return HasMany
     */
    public function dependents(): HasMany
    {
        return $this->hasMany(Question::class, 'dependent_id','id')->orderBy('id','asc');
    }



    /**
     * @return BelongsTo
     */
    public function dependentParent(): BelongsTo
    {
        return $this->belongsTo(Question::class,'dependent_id');
    }

    /**
     * @return BelongsToMany
     */
    public function establishmentTypes(): BelongsToMany
    {
        return $this->belongsToMany(EstablishmentType::class,'establishment_type_questions','question_id','establishment_type_id');
    }

    /**
     * @return BelongsToMany
     */
    public function questionDependents(): BelongsToMany
    {
        return $this->belongsToMany(Question::class,'questions_dependents','question_id','dependent_id');
    }

    /**
     * @return BelongsToMany
     */
    public function dependentQuestions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class,'questions_dependents','dependent_id','question_id');
    }
}
