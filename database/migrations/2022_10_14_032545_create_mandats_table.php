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
        Schema::create('mandats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('societe_huisier_id')->constrained();
            $table->string('num_mandat');
            $table->string('fichier_pdf')->nullable();
            $table->string('num_ordre');
            $table->string('honoraire_tva');
            $table->string('honoraire_expert');
            $table->string('frais_annexe');
            $table->string('droit_suite');
            $table->string('frais_pub');
            $table->string('quantite_bien');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mandats');
    }
};
