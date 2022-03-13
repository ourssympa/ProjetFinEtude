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
        Schema::create('compte_clients', function (Blueprint $table) {
            $table->id();
            $table->integer('idclient')->require();
            $table->string('numcompte')->require();
            $table->integer('solde');
            $table->date('dateouverture');
            $table->date('echeance');
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
        Schema::dropIfExists('compte_clients');
    }
};
