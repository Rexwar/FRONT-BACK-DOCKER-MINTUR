<?php

namespace App\Abstracts;

use App\Abstracts\Http\FormRequest;
use App\Traits\Jobs;
use App\Traits\Uploads;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

abstract class Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Jobs, Queueable, SerializesModels;

    public function getRequestInstance($request)
    {
        if (!is_array($request)) {
            return $request;
        }

        $class = new class() extends FormRequest {};

        return $class->merge($request);
    }
}
