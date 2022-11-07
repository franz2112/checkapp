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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('Dfname');
            $table->string('Dlname');
            $table->string('Gender')->nullable();
            $table->date('Bdate');
            $table->string('Specialization');
            $table->string('Demail')->nullable();
            $table->string('Dphone')->nullable();
            $table->string('file')->nullable();
            $table->foreignId('clinic_id')->nullable()->index();
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
        Schema::dropIfExists('doctors');
    }
};