<?php

namespace App\Traits;

use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Bus;
use Throwable;

trait Jobs
{
    /**
     * Dispatch a job to its appropriate handler and return a response array for ajax calls.
     *
     * @param mixed $job
     *
     * @return array
     */
    public function ajaxDispatch($job): array
    {
        $response = [
            'success' => true,
            'error' => false,
            'data' => '',
            'message' => '',
        ];
        try {
            $data = Bus::dispatchNow($job);
            $response['data'] = $data;
            $response['message'] = $data;
        } catch (Exception|\Throwable $e) {
            $response['success'] = false;
            $response['error'] = true;
            $response['message'] = str_replace(array('\'', '"'), '',
                preg_replace("[\n|\r|\n\r]", "", $e->getMessage()));
        } finally {
            return $response;
        }

    }
}
