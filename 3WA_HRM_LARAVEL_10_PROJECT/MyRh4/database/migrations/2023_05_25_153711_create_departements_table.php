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

        Schema::create('departements', function (Blueprint $table) {

            $table->id('id_departement');

            $table->string('nom_departement');

            $table->text('description_departement');

            $table->timestamps();

        });



        DB::table('departements')->insert([

            ['id_departement' => 1, 'nom_departement' => 'Direction Generale', 'description_departement' => 'test test'],

            ['id_departement' => 2, 'nom_departement' => 'Departement Financier', 'description_departement' => 'test test'],

            ['id_departement' => 3, 'nom_departement' => 'Departement Ressources humaines', 'description_departement' => 'test test'],

            ['id_departement' => 4, 'nom_departement' => 'Departement Technique', 'description_departement' => 'test test'],

            ['id_departement' => 5, 'nom_departement' => 'Departement Commercial', 'description_departement' => 'test test'],

            ['id_departement' => 6, 'nom_departement' => 'Departement Juridique', 'description_departement' => 'test test'],

            ['id_departement' => 7, 'nom_departement' => 'Departement Logistique', 'description_departement' => 'test test'],

        ]);



    }



    /**

     * Reverse the migrations.

     */

    public function down(): void

    {

        Schema::dropIfExists('departements');

    }

};

