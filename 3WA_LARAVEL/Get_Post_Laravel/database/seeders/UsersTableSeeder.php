<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('matable')->insert([
            'Nom' => 'Oubrik' ,
            'Prenom' => 'Amine' ,
            'Email' => 'amine.oubrik@gmail.com' ,
            'Motdepasse' => '123456789' ,
            'created_at' => now() ,
            'updated_at' => now() ,
        ]);
        }

    }

