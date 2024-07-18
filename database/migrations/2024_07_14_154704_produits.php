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
            
            // Avantages
            $table->unsignedBigInteger('id_avantage_1')->nullable(false);
            $table->unsignedBigInteger('id_avantage_2')->nullable();
            $table->unsignedBigInteger('id_avantage_3')->nullable();
            $table->unsignedBigInteger('id_avantage_4')->nullable();
            $table->unsignedBigInteger('id_avantage_5')->nullable();
            $table->unsignedBigInteger('id_avantage_6')->nullable();

            // Compositions
            $table->unsignedBigInteger('id_composition_1')->nullable(false);
            $table->unsignedBigInteger('id_composition_2')->nullable();
            $table->unsignedBigInteger('id_composition_3')->nullable();
            $table->unsignedBigInteger('id_composition_4')->nullable();
            $table->unsignedBigInteger('id_composition_5')->nullable();
            $table->unsignedBigInteger('id_composition_6')->nullable();

            // Utilisations
            $table->unsignedBigInteger('id_utilisation_1')->nullable(false);
            $table->unsignedBigInteger('id_utilisation_2')->nullable();
            $table->unsignedBigInteger('id_utilisation_3')->nullable();
            $table->unsignedBigInteger('id_utilisation_4')->nullable();
            $table->unsignedBigInteger('id_utilisation_5')->nullable();
            $table->unsignedBigInteger('id_utilisation_6')->nullable();

            // Précautions
            $table->unsignedBigInteger('id_precaution_1')->nullable(false);
            $table->unsignedBigInteger('id_precaution_2')->nullable();
            $table->unsignedBigInteger('id_precaution_3')->nullable();
            $table->unsignedBigInteger('id_precaution_4')->nullable();
            $table->unsignedBigInteger('id_precaution_5')->nullable();
            $table->unsignedBigInteger('id_precaution_6')->nullable();

            $table->text('description1_produit');
            $table->string('description2_produit');
            $table->unsignedBigInteger('id_application')->nullable(false);
            $table->unsignedBigInteger('id_culture')->nullable(false);
            $table->unsignedBigInteger('id_etape')->nullable(false);
            
            // Certifications
            $table->unsignedBigInteger('id_certification_1')->nullable(false);
            $table->unsignedBigInteger('id_certification_2')->nullable();

            $table->timestamps();

            // Foreign keys
            // Avantages
            $table->foreign('id_avantage_1')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('id_avantage_2')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('id_avantage_3')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('id_avantage_4')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('id_avantage_5')->references('id')->on('avantages')->onDelete('cascade');
            $table->foreign('id_avantage_6')->references('id')->on('avantages')->onDelete('cascade');

            // Compositions
            $table->foreign('id_composition_1')->references('id')->on('compositions')->onDelete('cascade');
            $table->foreign('id_composition_2')->references('id')->on('compositions')->onDelete('cascade');
            $table->foreign('id_composition_3')->references('id')->on('compositions')->onDelete('cascade');
            $table->foreign('id_composition_4')->references('id')->on('compositions')->onDelete('cascade');
            $table->foreign('id_composition_5')->references('id')->on('compositions')->onDelete('cascade');
            $table->foreign('id_composition_6')->references('id')->on('compositions')->onDelete('cascade');

            // Utilisations
            $table->foreign('id_utilisation_1')->references('id')->on('utilisations')->onDelete('cascade');
            $table->foreign('id_utilisation_2')->references('id')->on('utilisations')->onDelete('cascade');
            $table->foreign('id_utilisation_3')->references('id')->on('utilisations')->onDelete('cascade');
            $table->foreign('id_utilisation_4')->references('id')->on('utilisations')->onDelete('cascade');
            $table->foreign('id_utilisation_5')->references('id')->on('utilisations')->onDelete('cascade');
            $table->foreign('id_utilisation_6')->references('id')->on('utilisations')->onDelete('cascade');

            // Précautions
            $table->foreign('id_precaution_1')->references('id')->on('precautions')->onDelete('cascade');
            $table->foreign('id_precaution_2')->references('id')->on('precautions')->onDelete('cascade');
            $table->foreign('id_precaution_3')->references('id')->on('precautions')->onDelete('cascade');
            $table->foreign('id_precaution_4')->references('id')->on('precautions')->onDelete('cascade');
            $table->foreign('id_precaution_5')->references('id')->on('precautions')->onDelete('cascade');
            $table->foreign('id_precaution_6')->references('id')->on('precautions')->onDelete('cascade');

            // Certifications
            $table->foreign('id_certification_1')->references('id')->on('certifications')->onDelete('cascade');
            $table->foreign('id_certification_2')->references('id')->on('certifications')->onDelete('cascade');

            // Other foreign keys
            $table->foreign('id_application')->references('id')->on('applications')->onDelete('cascade');
            $table->foreign('id_culture')->references('id')->on('cultures')->onDelete('cascade');
            $table->foreign('id_etape')->references('id')->on('etapes')->onDelete('cascade');
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
