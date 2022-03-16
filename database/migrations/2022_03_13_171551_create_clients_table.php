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
        Schema::create('clients', function (Blueprint $table) {
            // elements en commun aux personnes physiques et morales
            $table->id();
            $table->string('codeclient')->unique();
            $table->integer('revmensuel')->default(0);
            $table->boolean('patrimoine')->default(false);
            $table->string('slug')->nullable();
            $table->integer('estimationpatrimoine')->default(0);
            //elements propres aux personnes physique
            $table->string('numcarte')->nullable();
            $table->integer('assvie')->default(0);
            $table->string('nom');
            $table->string('prenoms');
            $table->string('sexe');
            $table->string('nationalite')->nullable();
            $table->date('datedenaissance')->nullable();
            $table->string('profession')->nullable();

            $table->string('typedepersonne');
            $table->string('telephone');
            //elements propres aux personnes morales
            $table->string('designation')->nullable();
            $table->string('nrc')->nullable();
            $table->string('bp')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
