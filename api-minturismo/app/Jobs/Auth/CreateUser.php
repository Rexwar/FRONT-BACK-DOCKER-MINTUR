<?php

namespace App\Jobs\Auth;

use App\Abstracts\Job;
use App\Jobs\Admin\CreateContact;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use App\Traits\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Throwable;

class CreateUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Jobs, Queueable, SerializesModels;

    protected $user;

    protected $request;

    /**
     * Create a new job instance.
     *
     * @param  $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return Permission
     * @throws Throwable
     */
    public function handle()
    {
        try {
            DB::beginTransaction();
            $user = User::create($this->request);
//            $permissions = Permission::whereIn('name', ['admin-home-panel'])->pluck('id');
//            $roles = Role::whereIn('name', ['admin', 'super-admin'])->pluck('id');
//            if ($permissions) {
//                $user->permissions()->sync($permissions);
//            }
//            if ($roles) {
////                $user->roles()->sync($roles);
//            }
            DB::commit();
            return $user;
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new  \Exception($exception->getMessage());
        }


    }
}
