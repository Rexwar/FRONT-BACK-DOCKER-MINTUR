<?php

namespace App\Models\Forms;

use App\Models\Establishments\Results;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
        [
            'code',
            'name',
            'description',

        ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts =
        [
            'updated_at' => 'date:d-m-Y',
            'created_at' => 'date:d-m-Y',
        ];

    public static function boot()
    {
        parent::boot();


    }

    /**
     * @return BelongsToMany
     */
    public function forms(): BelongsToMany
    {
        return $this->belongsToMany(Form::class, 'forms_components', 'component_id', 'form_id');
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
     * @return HasMany
     */
    public function subTopics(): HasMany
    {
        return $this->hasMany(SubTopic::class, 'component_id')->orderBy('id','asc');;
    }
}
