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
        Schema::create('postes', function (Blueprint $table) {
            $table->id('id_poste');
            $table->string('nom_poste');
            $table->text('description_poste');
            $table->integer('type_poste')->comment('1 pour poste de responsable, 2 pour poste employé standard');

            $table->unsignedInteger('id_departement');
            $table->timestamps();

            $table->foreign('id_departement')->references('id_departement')->on('departements');
        });
        
       
        DB::table('postes')->insert([
            // Service technique
            ['id_poste' => 1,'nom_poste' => 'Responsable technique', 'description_poste' => 'Responsable du service technique' ,'type_poste' => 1 ,'id_departement' => 4 ],
            ['id_poste' => 2,'nom_poste' => 'Ingénieur', 'description_poste' => 'Responsable de la conception et de lingénierie','type_poste' => 2 ,'id_departement' => 4 ],
            ['id_poste' => 3,'nom_poste' => 'Technicien', 'description_poste' => 'Effectue les tâches techniques et de maintenance','type_poste' => 2 ,'id_departement' => 4 ],
            
            // Service commercial
            ['id_poste' => 4,'nom_poste' => 'Responsable commercial', 'description_poste' => 'Responsable du service commerical','type_poste' => 1 ,'id_departement' => 5 ],
            ['id_poste' => 5,'nom_poste' => 'Agent commercial', 'description_poste' => 'Responsable de la vente et de la relation client','type_poste' => 2 ,'id_departement' => 5 ],
            ['id_poste' => 6,'nom_poste' => 'Assistant commercial', 'description_poste' => 'Fournit un soutien administratif au service commercial' , 'type_poste' => 2,'id_departement' => 5 ],
            
            // Direction générale
            ['id_poste' => 7,'nom_poste' => 'Directeur général', 'description_poste' => 'Responsable de la gestion globale de l\'entreprise','type_poste' => 1 ,'id_departement' => 1 ],
            ['id_poste' => 8,'nom_poste' => 'Directeur adjoint', 'description_poste' => 'Assister le directeur général dans la planification stratégique et la prise de décision.','type_poste' => 2,'id_departement' => 1 ],
            ['id_poste' => 9,'nom_poste' => 'Secrétaire de direction', 'description_poste' => 'Assiste le directeur général dans ses tâches administratives','type_poste' => 2 , 'id_departement' => 1 ],
            
            // Service financier
            ['id_poste' => 10,'nom_poste' => 'Responsable financier', 'description_poste' => ' Responsable de la gestion financière globale de lentreprise.','type_poste' => 1 ,'id_departement' => 2 ],
            ['id_poste' => 11,'nom_poste' => 'Contrôleur financier', 'description_poste' => 'Responsable du contrôle et de la gestion financière','type_poste' => 2 , 'id_departement' => 2 ],
            ['id_poste' => 12,'nom_poste' => 'Comptable', 'description_poste' => 'Gère les opérations comptables de l\'entreprise','type_poste' => 2 , 'id_departement' => 2 ],
            
            // Service des ressources humaines

            ['id_poste' => 13,'nom_poste' => 'Responsable des ressources humaines', 'description_poste' => 'Gère les aspects liés aux ressources humaines','type_poste' => 1 ,'id_departement' => 3 ],
            ['id_poste' => 14,'nom_poste' => 'Recruteur', 'description_poste' => 'Soccupe du recrutement et de la sélection des candidats', 'type_poste' => 2 ,'id_departement' => 3 ],
            ['id_poste' => 15,'nom_poste' => 'Gestionnaire RH', 'description_poste' => 'Soccupe de la gestion administrative des ressources humaines.', 'type_poste' => 2 ,'id_departement' => 3 ],
            
            // Service juridique
            ['id_poste' => 16,'nom_poste' => 'Responsable juridique', 'description_poste' => 'Responsable de la gestion des affaires juridiques et de la conformité légale de lentreprise.','type_poste' => 1 ,'id_departement' => 6 ],
            ['id_poste' => 17,'nom_poste' => 'Avocat', 'description_poste' => 'Fournit des conseils juridiques et représente lentreprise dans les affaires légales','type_poste' => 2 ,'id_departement' => 6 ],
            ['id_poste' => 18,'nom_poste' => 'Juriste dentreprise', 'description_poste' => ' assure la conformité juridique des activités de lentreprise', 'type_poste' => 2 ,'id_departement' => 6 ],

            //Service logistique
            ['id_poste' => 19,'nom_poste' => 'Responsable logistique', 'description_poste' => 'Gère les opérations logistiques de lentreprise','type_poste' => 1 ,'id_departement' => 7 ],
            ['id_poste' => 20,'nom_poste' => 'Coordinateur des transports', 'description_poste' => 'Organise et coordonne les transports de marchandises', 'type_poste' => 2,'id_departement' => 7 ],
            ['id_poste' => 21,'nom_poste' => 'Magasinier', 'description_poste' => 'Gère les stocks et la gestion des entrepôts', 'type_poste' => 2 , 'id_departement' => 7 ],

        ]);
        
       
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postes');
    }
};
