<?php

namespace App\Traits;

use Doctrine\Common\Cache\Cache;
use GeneaLabs\LaravelModelCaching\CachedModel;
use Illuminate\Support\Facades\Artisan;

trait CacheClear
{
    /**
     * Boot function for Laravel model events.
     * https://laravel.com/docs/5.8/eloquent#events
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * After model is created, or whatever action, clear cache.
         */
        static::updated(function () {
            Artisan::call('cache:clear');
        });
        static::created(function () {
            Artisan::call('cache:clear');
        });
    }
}
