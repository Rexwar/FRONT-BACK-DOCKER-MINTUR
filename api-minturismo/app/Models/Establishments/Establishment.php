<?php

namespace App\Models\Establishments;

use App\Models\Forms\CatalogGeographicClassifier;
use App\Models\Forms\Form;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Establishment extends Model
{
    use SoftDeletes;


    protected $fillable =
        [
            'code',
            'name',
            'email',
            'company',
            'establishment_type_id',
            'ruc',
            'type_of_taxpayer',
            'province',
            'canton',
            'parrish',
            'direction',
            'start_year_operations',
            'has_register_tourist',
            'register_number',
            'progress',
        ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->code = mb_strtoupper($model->code);
            $model->name = mb_strtoupper($model->name);
        });
        static::updating(function ($model) {
            $model->code = mb_strtoupper($model->code);
            $model->name = mb_strtoupper($model->name);
        });
        static::deleting(function ($model){
            $model->results->each->delete();
        });
    }

    /**
     * @return BelongsToMany
     */
    public function forms(): BelongsToMany
    {
        return $this->belongsToMany(Form::class, 'establishment_forms_intents', 'establishment_id', 'form_id')->withPivot(['id','is_finished']);
    }

    /**
     * @return HasMany
     */
    public function results(): HasMany
    {
        return $this->hasMany(Results::class,'establishment_id');
    }

    /**
     * @return BelongsTo
     */
    public function establishmentType(): BelongsTo
    {
        return $this->belongsTo(EstablishmentType::class,'establishment_type_id');
    }

    /**
     * Location activity supports
     *
     * @return BelongsTo
     */
    public function provinceLocation()
    {
        return $this->belongsTo(CatalogGeographicClassifier::class, 'province');
    }

    /**
     * Location activity supports
     *
     * @return BelongsTo
     */
    public function cantonLocation()
    {
        return $this->belongsTo(CatalogGeographicClassifier::class, 'canton');
    }

    /**
     * Location activity supports
     *
     * @return BelongsTo
     */
    public function locationParrish()
    {
        return $this->belongsTo(CatalogGeographicClassifier::class, 'parrish');
    }
}
