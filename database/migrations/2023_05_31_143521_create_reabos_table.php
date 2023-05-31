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
        Schema::create('reabos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('formule');
            $table->date('date_deb');//date de debut de la formule du client
            $table->date('date_fin');//date de fin de la formule du client
            $table->boolean('relancer');//permet de savoir si un client s'est deja recharger pour le moi en cour
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
        Schema::dropIfExists('reabos');
    }
};
