<?php

namespace App\Models\Forms;

use App\Models\Establishments\Results;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubTopic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
        [
            'code',
            'name',
            'max_score',
            'result',
            'component_id',
            'description',
        ];

    protected $casts=
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

    public static function boot()
    {
        parent::boot();

    }

    /**
     * @return BelongsTo
     */
    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }


    /**
     * @return BelongsToMany
     */
    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'question_sub_topic','sub_topic_id','question_id')->orderBy('id','asc');
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

}
