<?php

namespace App\Http\Controllers;

use App\Models\UserTrackingData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrackLeavingPageController extends Controller
{
    public function store(Request $request)
    {
        $userTrackingData = UserTrackingData::find($request->id);
        $userTrackingData->time_end = Carbon::now();
        $userTrackingData->save();
    }
}
