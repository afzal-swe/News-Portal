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
        Schema::create('prayers', function (Blueprint $table) {
            $table->id();
            $table->string('fajr_en')->nullable();
            $table->string('fajr_bn')->nullable();
            $table->string('dhuhr_en')->nullable();
            $table->string('dhuhr_bn')->nullable();
            $table->string('asr_en')->nullable();
            $table->string('asr_bn')->nullable();
            $table->string('maghrib_en')->nullable();
            $table->string('maghrib_bn')->nullable();
            $table->string('isha_en')->nullable();
            $table->string('isha_bn')->nullable();
            $table->string('jummah_en')->nullable();
            $table->string('jummah_bn')->nullable();
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
        Schema::dropIfExists('prayers');
    }
};
