<?php

namespace App\Jobs\Auth;

use App\Abstracts\Job;
use App\Models\Auth\Role;
use DB;
use Throwable;

class UpdateRole extends Job
{
    protected $role;

    protected $request;

    /**
     * Create a new job instance.
     *
     * @param  $role
     * @param  $request
     */
    public function __construct($role, $request)
    {
        $this->role = $role;
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
            $this->role->update($this->request->all());

            if ($this->request->has('permissions')) {
                $this->role->syncPermissions($this->request->get('permissions'));
            }
        });

        return $this->role;
    }
}
