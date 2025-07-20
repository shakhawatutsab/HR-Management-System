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
        Schema::create('shift_rosters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id');
            $table->foreignId('employee_id');
            $table->foreignId('shift_id');
            $table->string('shift_by');
            $table->string('shift_day');
            $table->boolean('email_permission');
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
        Schema::dropIfExists('shift_rosters');
    }
};