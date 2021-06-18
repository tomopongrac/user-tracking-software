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
        $trackUser = $this->trackUser->saveData();

        return $this->responseWithTracking('welcome', $trackUser);
    }

    public function contact()
    {
        $trackUser = $this->trackUser->saveData();

        return $this->responseWithTracking('contact', $trackUser);
    }

    public function about()
    {
        return response()->view('about');
    }
}
