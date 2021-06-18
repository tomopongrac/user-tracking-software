<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserTrackingData;
use Illuminate\Http\Request;

class UserTrackingDataController extends Controller
{
    public function index()
    {
        $allData = UserTrackingData::all();

        return view('admin.user-tracking-data.index', ['allData' => $allData]);
    }
}
