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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('doctor');
            $table->string('consultation');
            $table->string('date');
            $table->string('time');
            $table->longText('reason');
            $table->string('specialId')->nullable();
            $table->string('meetingLink')->nullable();
            $table->string('status')->default('pending');
            $table->foreignId('clinic_id')->constrained();
            $table->foreignId('patient_id')->nullable()->index();
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
        Schema::dropIfExists('appointments');
    }
};