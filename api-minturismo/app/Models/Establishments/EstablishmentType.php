<?php

namespace App\Models\Establishments;

use App\Models\Forms\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EstablishmentType extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable =
        [
            'name',
        ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @return HasMany
     */
    public function establishments(): HasMany
    {
        return $this->hasMany(Establishment::class,'establishment_type_id');
    }


    /**
     * @return BelongsToMany
     */
    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(EstablishmentType::class,'establishment_type_questions','establishment_type_id','question_id');
    }
}
