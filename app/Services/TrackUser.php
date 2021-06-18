<?php

namespace App\Services;

use App\Models\UserTrackingData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrackUser
{
    private $userTrackingData = null;

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
        $userTrackingData->path = request()->path();
        $userTrackingData->time_start = Carbon::now();
        $userTrackingData->save();

        $this->userTrackingData = $userTrackingData;

        return $this;
    }

    public function ifCookieExists()
    {
        return request()->hasCookie('userTrackingUuid');
    }

    public function getUserTrackingData()
    {
        return $this->userTrackingData;
    }
}
