<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;
use App\Models\Poste;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_departement',
        'description_departement',
        
    ];


    public function employe()
    {
        return $this->hasMany(Employe::class );
    }

    public function poste()
    {
        return $this->hasMany(Poste::class );
    }
}
