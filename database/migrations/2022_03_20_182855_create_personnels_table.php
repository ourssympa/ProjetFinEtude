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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms')->nullable();
            $table->string('tel')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('sexe');
            $table->date('datedenaissance')->nullable();
            $table->string('slug');
            $table->string('poste');
            $table->string('nummatricule');
            $table->string('nivetude')->nullable();
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
        Schema::dropIfExists('personnels');
    }
};
