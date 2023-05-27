<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      

        $users = [
            [
                'id' => 1,
                'name' => 'Amine Oubrik',
                'email' => 'superadmin@example.com',
                'password' => bcrypt('123456'),
                'user_type' => 1 ,
                'is_deleted' => 0 ,
               
               
            ],
            [
                'id' => 2,
                'name' => 'Adnane Tallouzt',
                'email' => 'admin1@example.com',
                'password' => bcrypt('123456'),
                'user_type' => 2 ,
                'is_deleted' => 0 ,
                
            ],
            [
                'id' => 3,
                'name' => 'Kratos krat',
                'email' => 'admin2@example.com',
                'password' => bcrypt('123456'),               
                'user_type' => 2 ,
                'is_deleted' => 0 ,
              
            ],   
              [
                'id' => 4,
                'name' => 'John messi',
                'email' => 'john1@example.com',
                'password' => bcrypt('123456'),              
                'user_type' => 3 ,
                'is_deleted' => 0 ,
                
            ],
            [
                'id' => 5,
                'name' => 'John maradona',
                'email' => 'john2@example.com',
                'password' => bcrypt('123456'),              
                'user_type' => 3 ,
                'is_deleted' => 0 ,
               
            ],
            [
                'id' => 6,
                'name' => 'John thiago',
                'email' => 'john3@example.com',
                'password' => bcrypt('123456'),              
                'user_type' => 3 ,
                'is_deleted' => 0 ,
                
            ],

            [
                'id' => 7,
                'name' => 'John tarantino',
                'email' => 'john4@example.com',
                'password' => bcrypt('123456'),              
                'user_type' => 3 ,
                'is_deleted' => 0 ,
                
            ],   
            
        ];



        foreach ($users as $userData) {
            $user = User::create($userData);
            $matricule = 500 + $user->id;
            $nameParts = explode(' ', $user->name);
            $nom = $nameParts[0]; // Contient "John"
            $prenom = $nameParts[1]; // Contient "Doe"
            $civilites = ['Mr', 'Mme', 'Mlle'];
            $departements = [1,2,3,4,5,6,7];
            $postes = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
            $telephones = ['0678254785','0648526574','0569713461','0236541256','0764684514'];
            $cins_employe = ['J4545345','B4547445','A2545845','C1544465' ];
            $salaires_employe =  [7000,8500,9000,15000,14000,12000,18000];
            $matricules_cnss_employe = ['44545345','24547445','12545845','11544465' ];
            $villes_employe = ['Agadir','Marrakech','Casablanca','Tanger' ];
            $adresses_employe = ['M 2 A23','D 5 A78','G 4 B213' ];
            

            $departement = $departements[array_rand($departements)];
            $poste = $postes[array_rand($postes)];
            $civilite = $civilites[array_rand($civilites)];
            $telephone = $telephones[array_rand($telephones)];
            $cin_employe = $cins_employe[array_rand($cins_employe)];
            $salaire_employe =  $salaires_employe[array_rand( $salaires_employe)];
            $matricule_cnss_employe  =  $matricules_cnss_employe [array_rand($matricules_cnss_employe )];
            $ville_employe =  $villes_employe[array_rand( $villes_employe)];
            $adresse_employe =  $adresses_employe[array_rand( $adresses_employe)];

            $employe = $user->employe()->create([

                'matricule_employe' => $matricule,
                'user_id' => $user->id ,
                'id_departement' => $departement,
                'id_poste' => $poste,
                'civilite_employe' => $civilite,
               
                'telephone_employe' => $telephone,
                'cin_employe' => $cin_employe,
                'salaire_employe' => $salaire_employe,
                'matricule_cnss_employe' => $matricule_cnss_employe,
                'ville_employe' => $ville_employe,
                'adresse_employe' => $adresse_employe,
                'date_naissance_employe' => null,
                'photo_employe' => null,
            ]);
        
    
    

        }
    }
}
