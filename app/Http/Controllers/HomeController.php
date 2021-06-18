<?php

namespace App\Http\Controllers;

use App\Models\UserTrackingData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $uuid = Str::uuid()->toString();

        // save data
        $userTrackingData = new UserTrackingData();
        $userTrackingData->uuid = $uuid;
        $userTrackingData->ip = $request->ip();
        $userTrackingData->time_start = Carbon::now();
        $userTrackingData->save();


        return response()->view('welcome')->withCookie(cookie()->forever('userTrackingUuid', $uuid));
    }
}
