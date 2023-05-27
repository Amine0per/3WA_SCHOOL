<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;
use App\Models\Employe;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_poste',
        'description_poste',
        'id_departement',
        'type_poste',
    ];

    public function departement()
{
    return $this->hasOne(Departement::class, 'id_departement' , 'id_departement' );
}  
public function employe()
{
    return $this->hasMany(Employe::class );
}

}
