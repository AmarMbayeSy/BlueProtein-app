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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->string('image_produit');
            $table->unsignedBigInteger('id_avantage');
            $table->unsignedBigInteger('id_composition');
            $table->unsignedBigInteger('id_utilisation');
            $table->unsignedBigInteger('id_precaution');
            $table->unsignedBigInteger('id_application');
            $table->unsignedBigInteger('id_culture');
            $table->unsignedBigInteger('id_etape');
            $table->unsignedBigInteger('id_certification');
            $table->unsignedBigInteger('avantage_2')->nullable(); // Nouvelle colonne
            $table->unsignedBigInteger('avantage_3')->nullable(); // Nouvelle colonne
            $table->text('description1_produit');
            $table->string('description2_produit');
            $table->foreign('id_avantage')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('id_precaution')->references('id')->on('precautions')->onDelete('cascade');
            $table->foreign('id_utilisation')->references('id')->on('utilisations')->onDelete('cascade');
            $table->foreign('id_composition')->references('id')->on('compositions')->onDelete('cascade');
            $table->foreign('id_application')->references('id')->on('applications')->onDelete('cascade');
            $table->foreign('id_culture')->references('id')->on('cultures')->onDelete('cascade');
            $table->foreign('id_etape')->references('id')->on('etapes')->onDelete('cascade');
            $table->foreign('id_certification')->references('id')->on('certifications')->onDelete('cascade');
            $table->foreign('avantage_2')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('avantage_3')->references('id')->on('avantages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
