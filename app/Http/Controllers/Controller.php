<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseWithTracking($viewFile, $userTrackingData)
    {
        return response()->view($viewFile, [
            'uuid' => $userTrackingData->uuid,
            'id' => $userTrackingData->id
        ])->withCookie(cookie()->forever('userTrackingUuid', $userTrackingData->uuid));
    }
}
