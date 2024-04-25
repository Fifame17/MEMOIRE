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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Ajoute une colonne auto-incrémentée "id"
            $table->string('title'); // Ajoute une colonne de type chaîne de caractères pour le titre du livre
            $table->string('author'); // Ajoute une colonne de type chaîne de caractères pour l'auteur du livre
            $table->text('description')->nullable(); // Ajoute une colonne de type texte pour la description du livre, autorise les valeurs NULL
            $table->timestamps(); // Ajoute automatiquement les colonnes "created_at" et "updated_at" pour suivre les horodatages de création et de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
