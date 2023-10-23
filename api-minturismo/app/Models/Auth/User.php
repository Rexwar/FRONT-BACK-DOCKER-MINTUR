<?php

namespace App\Models\Auth;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->name = strtoupper($model->name);
        });
        static::updating(function ($model) {
            $model->name = strtoupper($model->name);
        });
    }


    /**
     * Always hash the password when we save it to the database
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Scope to only include active currencies.
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeEnabled(Builder $query): Builder
    {
        return $query->where('enabled', 1);
    }

    /**
     * Scope to get all rows filtered, sorted and paginated.
     *
     * @param Builder $query
     *
     * @return mixed
     */
    public function scopeCollect(Builder $query)
    {
        $request = request();

        $search = $request->get('search');
        $limit = $request->get('limit', '25');

        return $query->usingSearchString($search)->sortable()->paginate($limit);
    }

    public function isSuperAdmin()
    {
        return $this->hasRoles(['super-admin']);
    }

    public function hasRoles(array $roles)
    {
        return $this->roles->pluck('name')->intersect($roles)->count();
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }
}
