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
        Schema::create('employes', function (Blueprint $table) {
            $table->integer('matricule_employe')->primary()->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('id_departement')->nullable();
            $table->unsignedInteger('id_poste')->nullable();
            $table->string('civilite_employe')->nullable()->default(null);
            $table->string('telephone_employe')->nullable()->default(null);
            $table->string('cin_employe')->nullable()->default(null);
            $table->integer('salaire_employe')->nullable()->default(null);
            $table->string('matricule_cnss_employe')->nullable()->default(null);
            $table->string('ville_employe')->nullable()->default(null);
            $table->string('adresse_employe')->nullable()->default(null);
            $table->date('date_naissance_employe')->nullable()->default(null);
            $table->string('photo_employe')->nullable()->nullable()->default(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_departement')->references('id_departement')->on('departements');
            $table->foreign('id_poste')->references('id_poste')->on('postes');
        });

        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
