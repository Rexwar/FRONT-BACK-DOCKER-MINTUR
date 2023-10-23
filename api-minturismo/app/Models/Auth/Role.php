<?php

namespace App\Models\Auth;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as BaseRole;

class Role extends BaseRole
{
    use Cachable;

    protected $table = 'roles';

    protected $fillable = ['name', 'guard_name', 'id_azuread_rol', 'is_project_role'];

    protected array $sortable = ['name'];

    /**
     * Scope to get all rows filtered, sorted and paginated.
     *
     * @param Builder $query
     *
     * @return mixed
     */

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $name = self::transformNameRol($model->name);
            $model->name = $name;
        });

        static::updating(function ($model) {
            $name = self::transformNameRol($model->name);
            $model->name = $name;
        });
        static::deleting(function ($model) {
            $model->syncPermissions([]);
        });
    }

    public static function transformNameRol($name)
    {
        $name = strtolower($name);
        $name = trim($name);
        $arrayName = explode(" ", $name);
        $name = "";
        $count = 1;
        foreach ($arrayName as $item) {
            if ($count < count($arrayName)) {
                $name = $name . $item . "-";
                $count++;
            } else {
                $name = $name . $item;
            }
        }
        return $name;
    }

    public function scopeCollect(Builder $query)
    {
        $request = request();

        $search = $request->get('search');
        $limit = $request->get('limit', '25');

        return $query->usingSearchString($search)->sortable()->paginate($limit);
    }

    /**
     * Scope to not super-admin roles
     *
     * @param Builder $query
     *
     * @return mixed
     */
    public function scopeNotSuperAdmin(Builder $query)
    {
        return $query->where('name', '<>', 'super-admin');
    }

    /**
     * Scope to not super-admin roles
     *
     * @param Builder $query
     *
     * @return mixed
     */
    public function scopeIsSuperAdmin(Builder $query)
    {
        return $query->where('name', 'super-admin');
    }
}
