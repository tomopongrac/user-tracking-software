<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function responseWithTracking($viewFile, $trackUser)
    {
        if ($trackUser->ifCookieExists()) {
            return response()->view($viewFile, [
                'uuid' => $trackUser->getUserTrackingData()->uuid,
                'id' => $trackUser->getUserTrackingData()->id
            ]);
        }

        return response()->view($viewFile, [
            'uuid' => $trackUser->getUserTrackingData()->uuid,
            'id' => $trackUser->getUserTrackingData()->id
        ])->withCookie(cookie()->forever('userTrackingUuid', $trackUser->getUserTrackingData()->uuid));
    }
}
