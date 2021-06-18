<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrackingData extends Model
{
    use HasFactory;

    protected $table = 'users_tracking_data';

    public $timestamps = false;
}
