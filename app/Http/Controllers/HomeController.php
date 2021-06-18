<?php

namespace App\Http\Controllers;

use App\Models\UserTrackingData;
use App\Services\TrackUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $trackUser;

    public function __construct(TrackUser $trackUser)
    {
        $this->trackUser = $trackUser;
    }

    public function index(Request $request)
    {
        $userTrackingData = $this->trackUser->saveData();

        return responseWithTracking('welcome', $userTrackingData);
    }

    public function contact()
    {
        dd('contact');
    }
}
