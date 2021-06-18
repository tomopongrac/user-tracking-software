<?php

namespace App\Services;

use App\Models\UserTrackingData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrackUser
{
    public function saveData()
    {
        // Check if cookie exists
        if ($this->ifCookieExists()) {
            $uuid = request()->cookie('userTrackingUuid');
        } else {
            $uuid = Str::uuid()->toString();
        }

        // save data
        $userTrackingData = new UserTrackingData();
        $userTrackingData->uuid = $uuid;
        $userTrackingData->ip = request()->ip();
        $userTrackingData->time_start = Carbon::now();
        $userTrackingData->save();

        return $userTrackingData;
    }

    public function ifCookieExists()
    {
        return request()->hasCookie('userTrackingUuid');
    }
}
