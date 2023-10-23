<?php

namespace App\Jobs\Auth;

use App\Abstracts\Job;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use DB;
use Throwable;

class CreateRole extends Job
{
    protected $role;

    protected $request;

    /**
     * Create a new job instance.
     *
     * @param  $request
     */
    public function __construct($request)
    {
        $this->request = $this->getRequestInstance($request);
    }

    /**
     * Execute the job.
     *
     * @return Role
     * @throws Throwable
     */
    public function handle(): Role
    {
        DB::transaction(function () {
            $this->role = Role::create($this->request->all());
            if ($this->request->has('permissions')) {
                $this->role->givePermissionTo($this->request->get('permissions'));
            }
        });

        return $this->role;
    }
}
