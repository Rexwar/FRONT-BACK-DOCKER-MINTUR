<?php

namespace App\Abstracts\Http;

use App\Traits\Jobs;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, Jobs;

    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->setPermissions();
    }

    /**
     * Assign permissions to methods.
     *
     * @return void
     */
    public function setPermissions()
    {
        // No need to check for permission in console
        if (app()->runningInConsole()) {
            return;
        }
    }

    /**
     * Generate a pagination collection.
     *
     * @param array|Collection $items
     * @param int $perPage
     * @param int $page
     * @param array $options
     *
     * @return LengthAwarePaginator
     */
    public function paginate($items, $perPage = 15, $page = null, $options = []): LengthAwarePaginator
    {
        $perPage = $perPage ?: request('limit', setting('default.list_limit', '25'));

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
