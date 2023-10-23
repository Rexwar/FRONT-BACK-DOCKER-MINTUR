<?php

namespace App\Models\Forms;

use App\Models\Establishments\Establishment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE='Activo';
    const STATUS_NO_ACTIVE='NoActivo';

    protected $fillable =
        [
            'code',
            'name',
            'description',
            'status',
        ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts=
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
    public function establiishments(): BelongsToMany
    {
        return $this->belongsToMany(Establishment::class, 'establishment_forms_intents', 'form_id', 'establishment_id')->withPivot(['id','is_finished']);
    }

    /**
     * @return BelongsToMany
     */
    public function components(): BelongsToMany
    {
        return $this->belongsToMany(Component::class, 'forms_components', 'form_id', 'component_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE)->first();
    }
}
