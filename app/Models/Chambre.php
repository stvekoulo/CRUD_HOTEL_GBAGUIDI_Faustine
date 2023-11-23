<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom de lhotel',
        'Description de lhotel',
        'Nom de la chambre',
        'Prix',
        'Nombre de lits',
        'Max dadultes',
        'Enfants maximum autorise',
        'Attributs',
        'Statut',
    ];
}
