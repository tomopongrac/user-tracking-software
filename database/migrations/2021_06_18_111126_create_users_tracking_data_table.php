<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTrackingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tracking_data', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('ip');
            $table->string('path');
            $table->date('time_start');
            $table->date('time_end')->nullable();
            $table->date('user_agent')->nullable();
            $table->date('previous_page')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_tracking_data');
    }
}
