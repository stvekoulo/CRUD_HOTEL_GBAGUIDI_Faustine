<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('Nom de lhotel');
            $table->string('Description de lhotel');
            $table->string('Nom de la chambre');
            $table->string('Prix');
            $table->string('Nombre de lits');
            $table->string('Max dadultes');
            $table->string('Enfants maximum autorise');
            $table->string('Attributs');
            $table->string('Statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
