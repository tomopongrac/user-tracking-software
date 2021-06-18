<?php

namespace App\Http\Controllers;

use App\Models\UserTrackingData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrackLeavingPageController extends Controller
{
    public function store(Request $request)
    {
        $userTrackingData = UserTrackingData::where('id', $request->id)->where('uuid', $request->uuid)->first();

        if ($userTrackingData === null) {
            return;
        }

        $userTrackingData->time_end = Carbon::now();
        $userTrackingData->save();
    }
}
