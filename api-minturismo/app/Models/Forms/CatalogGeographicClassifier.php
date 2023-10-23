<?php

namespace App\Models\Forms;

use App\Models\Establishments\Establishment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class CatalogGeographicClassifier extends Model
{
    use HasRecursiveRelationships;

    const TYPE_CANTON = 'CANTON';
    const TYPE_PARISH = 'PARISH';
    const TYPE_PROVINCE = 'PROVINCE';

    const NO_PROVINCE = 1;
    const NO_CANTON = 2;
    const NO_PARISH = 3;
    const NO_LOCATION_CODE = '00';

    /**
     * @var bool
     */
    public $timestamps = true;

    protected bool $tenantable = false;

    /**
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'code',
        'full_code',
        'description',
        'type'
    ];

    public static function boot()
    {
        parent::boot();

    }

    /**
     * Retorna los tipos de localizaciones
     *
     * @return array
     */
    public static function types()
    {
        return [
            'CANTON' => trans('budget.labels.' . 'CANTON'),
            'PARISH' => trans('budget.labels.' . 'PARISH'),
            'PROVINCE' => trans('budget.labels.' . 'PROVINCE')
        ];
    }

    public function getPath(string $path = null)
    {
        $parent = $this->parent()->first();

        if ($parent) {
            return $parent->getPath($parent->description . ' / ' . ($path ?? $this->description));
        } else {
            return $path ?? $this->description;
        }
    }

    /**
     * @return HasMany
     */
    public function establishments(): HasMany
    {
        return $this->hasMany(Establishment::class,'province');
    }
}
