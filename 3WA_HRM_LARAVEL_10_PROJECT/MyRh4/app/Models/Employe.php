<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Departement;
use App\Models\Poste;



class Employe extends Model
{
    use HasFactory;

    protected $primaryKey = 'matricule_employe';

    protected $fillable = [
        'matricule_employe',
        'user_id',
        'id_departement',
        'id_poste',
        'civilite_employe', 
        'telephone_employe',
        'cin_employe',
        'salaire_employe',
        'matricule_cnss_employe',
        'ville_employe',
        'adresse_employe',
        'date_naissance_employe',
        'photo_employe',
    ];

   protected $dates = [
        'date_naissance_employe',
    ];

    protected $casts = [
        'matricule_employe' => 'integer',
        'matricule_cnss_employe' => 'integer',
    ];
   
    public function user()
    {
        return $this->hasOne(User::class);
    }


    public function departement()
{
    return $this->hasOne(Departement::class , 'id_departement' , 'id_departement');
}


public function poste()
{
    return $this->hasOne(Poste::class, 'id_poste' , 'id_poste');
}


}
