<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

class ChambreController extends Controller
{
    public function liste_chambre()
    {

        return view('chambre.liste');
    }
²
    public function ajouter_chambre()
    {

        return view('chambre.ajouter');
    }
    public function ajouter_chambre_traitement(Request $request)
    {

        $request->validate([
            'Nom de lhotel'=> 'required',
            'Description de lhotel'=> 'required',
            'Nom de la chambre'=> 'required',
            'Prix'=> 'required',
            'Nombre de lits'=> 'required',
            'Max dadultes'=> 'required',
            'Enfants maximum autorise'=> 'required',
            'Attributs'=> 'required',
            'Statut'=> 'required',
        ]);

        $chambre = new Chambre();
        $chambre->Nomdelhotel = $request->Nomdelhotel;
        $chambre->Descriptiondelhotel = $request->Descriptiondelhotel;
        $chambre->Nomdelachambre = $request->Nomdelachambre;
        $chambre->Prix = $request->Prix;
        $chambre->Nombredelits = $request->Nombredelits;
        $chambre->Maxdadultes = $request->Maxdadultes;
        $chambre->Enfantsmaximumautorise = $request->Enfantsmaximumautorise;
        $chambre->Attributs = $request->Attributs;
        $chambre->Statut = $request->Statut;
        $chambre->save();

        return redirect('/ajouter')->with('statuts',  'La chambre a bien été ajouté avec succès.');


    }
}
