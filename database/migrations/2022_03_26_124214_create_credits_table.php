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
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->string("codecredit");
            $table->integer('montant');
            $table->integer('solde')->nullable();
            $table->integer('solde_credit');
            $table->integer('idclient');
            $table->double('interet')->nullable();
            $table->string('motifs')->nullable();
            $table->date('dateoctroi')->nullable();
            $table->string('status');
            $table->date('echeance')->nullable();
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
        Schema::dropIfExists('credits');
    }
};
