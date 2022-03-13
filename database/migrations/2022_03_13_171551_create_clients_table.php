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
            $table->string('codeclient')->require()->unique();
            $table->integer('revmensuel');
            $table->string('patrimoine');
            $table->string('slug');
            $table->integer('estimationpatrimoine');
            //elements propres aux personnes physique
            $table->string('numcarte');
            $table->String('assvie')->default('0');
            $table->string('nom');
            $table->string('sexe');
            $table->string('nationalite');
            $table->date('datedenaissance');
            $table->String('profession');

            $table->string('typedepersonne');
            $table->string('telephone');
            //elements propres aux personnes morales
            $table->string('designation');
            $table->string('nrc');
            $table->string('bp');
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
