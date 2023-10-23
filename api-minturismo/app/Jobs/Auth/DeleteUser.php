<?php

namespace App\Jobs\Auth;

use App\Abstracts\Job;
use DB;
use Exception;
use Throwable;

class DeleteUser extends Job
{
    protected $user;

    /**
     * Create a new job instance.
     *
     * @param  $user
     */
    public function __construct($user)
    {
        $this->user = $user;
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
            $this->user->delete();
        });

        return true;
    }
}
