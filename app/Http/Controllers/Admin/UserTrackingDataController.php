<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserTrackingData;
use Illuminate\Http\Request;

class UserTrackingDataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('total-number-per-user')) {
            $tableView = '_table-visits-per-user';
            $allData = UserTrackingData::groupBy('uuid')->selectRaw('count(*) as total, uuid')->get();
        } else {
            $tableView = '_table-all-data';
            $allData = UserTrackingData::all();
        }

        return view('admin.user-tracking-data.index', ['allData' => $allData, 'tableView' => $tableView]);
    }
}
