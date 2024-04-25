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
        Schema::create('appointements', function (Blueprint $table) {
            $table->id_appointements();
            $table->string('id_patients');
            $table->string('creation_date');
            $table->string('id_doctors')->unique();
            $table->string('statut');
            $table->string('id_administrator');
            $table->timestamps();
            $table->softDeletes(); // Ajout de la suppression douce (soft delete)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointements');
    }
};
