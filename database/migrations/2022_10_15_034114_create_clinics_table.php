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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('clinicname');
            $table->string('ofname');
            $table->string('olname');
            $table->string('caddress');
            $table->string('cemail')->unique();
            $table->string('Ccontact')->unique();
            $table->string('Profile')->nullable();
            $table->string('Proof')->nullable();
            $table->string('status')->default('pending');
            $table->foreignId('clinic_id')->nullable();
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
        Schema::dropIfExists('clinics');
    }
};