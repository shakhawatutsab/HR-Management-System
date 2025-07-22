<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employ_id');
            $table->string('location');
            $table->string('clock_in_time');
            $table->string('clock_in_ip');
            $table->string('clock_out_time');
            $table->boolean('late');
            $table->boolean('half_day');
            $table->string('work_form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendences');
    }
};
