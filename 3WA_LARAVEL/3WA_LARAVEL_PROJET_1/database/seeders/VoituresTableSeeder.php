<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoituresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \DB::table('voitures')->insert(
        ['Plaque'=>'A3316377' ,
        'Marque'=>'Peugeot' ,
        'Modele'=>'206+' ,
        'Couleur'=>'Blanc_Glacier' ,
        'Prix'=>'150000dh' ,
        'created_at'=>now() ,
        'updated_at'=>now() , 
        ]);
    }
}
