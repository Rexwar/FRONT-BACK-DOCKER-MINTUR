<?php

namespace App\Helpers;

use App\Jobs\Auth\CreateUser;
use App\Jobs\Admin\CreateCompany;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Class Installer
 *
 * @package App\Helpers
 */
class Installer
{

    public static function createUser($name, $email, $password)
    {
        try {
            DB::beginTransaction();
            dispatch_now(new CreateUser([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'enabled' => '1',
            ]));
            DB::commit();

        } catch (Exception $exception) {
            DB::rollBack();
            throw new Exception($exception->getMessage());
        }

    }
}
