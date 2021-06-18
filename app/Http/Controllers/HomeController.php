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
        // Check if cookie exists
        if ($request->hasCookie('userTrackingUuid')) {
            $uuid = $request->cookie('userTrackingUuid');
        } else {
            $uuid = Str::uuid()->toString();
        }

        // save data
        $userTrackingData = new UserTrackingData();
        $userTrackingData->uuid = $uuid;
        $userTrackingData->ip = $request->ip();
        $userTrackingData->time_start = Carbon::now();
        $userTrackingData->save();

        return response()->view('welcome', [
            'uuid' => $uuid,
            'id' => $userTrackingData->id
        ])->withCookie(cookie()->forever('userTrackingUuid', $uuid));
    }

    public function contact()
    {
        dd('contact');
    }
}
