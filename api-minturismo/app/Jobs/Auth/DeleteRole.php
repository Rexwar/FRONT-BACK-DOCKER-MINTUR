<?php

namespace App\Jobs\Auth;

use App\Abstracts\Job;
use DB;
use Exception;
use Throwable;

class DeleteRole extends Job
{
    protected $role;

    /**
     * Create a new job instance.
     *
     * @param  $role
     */
    public function __construct($role)
    {
        $this->role = $role;
    }

    /**
     * Execute the job.
     *
     * @return boolean|Exception
     * @throws Throwable
     */
    public function handle()
    {
        DB::transaction(function () {
            $this->role->delete();
        });

        return true;
    }
}
