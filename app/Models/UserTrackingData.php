<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrackingData extends Model
{
    use HasFactory;

    protected $table = 'users_tracking_data';

    public $timestamps = false;

    public function getDurationAttribute()
    {
        $startTime = Carbon::parse($this->time_start);
        $endTime = Carbon::parse($this->time_end);
        return $startTime->diff($endTime)->format('%H:%I:%S');
    }
}
