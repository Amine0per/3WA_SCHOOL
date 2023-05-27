<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employe;
use App\Models\Departement;
use App\Models\Poste;
use Illuminate\Http\Request;
use Hash;

class SuperAdminController extends Controller
{
    //

    public function list()
    {   $users = User::getUsers();
        $data['header_title'] = 'Liste des employees';
        return view('superadmin.superadmin.list' , $data , compact('users' ));
    }
   
    
    

    public function add()
    {
       

        $data['header_title'] = 'Ajouter nouvel employe';
        $departements = Departement::all();
        $postes = Poste::all();
        return view('superadmin.superadmin.add', $data , compact('departements', 'postes'));
    }

    public function insert(Request $request)
    {
        // Vérifier si l'email existe déjà
        $existingEmail = User::where('email', $request->email)->first();
        if ($existingEmail) 
        {
           return redirect()->back()->with('error', "Cet email est déjà utilisé.");
        }

        // Vérifier si le matricule existe déjà
        $existingMatricule = Employe::where('matricule_employe', $request->matricule_employe)->first();
        if ($existingMatricule)
        {
        return redirect()->back()->with('error', "Ce matricule est déjà utilisé.");
        }

        $user=new User;
        $user->name =trim($request->name);
        $user->email =trim($request->email);
        $user->password =Hash::make($request->password);
        $user->user_type =trim($request->user_type);
        $user->save();

        $employe = new Employe;
        $employe->matricule_employe = $request->matricule_employe;
        $employe->matricule_cnss_employe = $request->matricule_cnss_employe;
        $employe->civilite_employe = $request->civilite_employe;
        $employe->cin_employe = $request->cin_employe;
        $employe->salaire_employe = $request->salaire_employe;
        $employe->telephone_employe = $request->telephone_employe;
        $employe->ville_employe = $request->ville_employe;
        $employe->adresse_employe = $request->adresse_employe;
        $employe->date_naissance_employe = $request->date_naissance_employe;
        $employe->photo_employe = $request->photo_employe; // Assurez-vous que votre formulaire a l'attribut 'enctype="multipart/form-data"'
        $employe->id_departement = $request->id_departement;
        $employe->id_poste = $request->id_poste;

        $user->employe()->save($employe);
        

        return redirect('superadmin/superadmin/list');
      
       
    }


    
    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = 'Editer employe';
            $departements = Departement::all();
            $postes = Poste::all();
       
            return view('superadmin.superadmin.edit', $data , compact('departements', 'postes'));

        }
        else
        {
            abort(404);
        }

      
    }


    
    public function update($id, Request $request)
    {

        
        $user = User::getSingle($id);
        $employe = $user->employe()->first();

         // Vérifier si l'email existe déjà (uniquement si l'email a été modifié)
if ($request->email != $user->email) {
    $existingEmail = User::where('email', $request->email)->first();
    if ($existingEmail) {
        return redirect()->back()->with('error', "Cet email est déjà utilisé.");
    }
}

// Vérifier si le matricule existe déjà (uniquement si le matricule a été modifié)
if ($request->matricule_employe != $employe->matricule_employe) {
    $existingMatricule = Employe::where('matricule_employe', $request->matricule_employe)->first();
    if ($existingMatricule) {
        return redirect()->back()->with('error', "Ce matricule est déjà utilisé.");
    }
}
 
         $user->name =trim($request->name);
         $user->email =trim($request->email);

         if(!empty($request->password))
         {
            $user->password =Hash::make($request->password);
         }
       
         $user->user_type =trim($request->user_type);
         $user->save();
 
       
         $employe->matricule_employe = $request->matricule_employe;
         $employe->matricule_cnss_employe = $request->matricule_cnss_employe;
         $employe->civilite_employe = $request->civilite_employe;
         $employe->cin_employe = $request->cin_employe;
         $employe->salaire_employe = $request->salaire_employe;
         $employe->telephone_employe = $request->telephone_employe;
         $employe->ville_employe = $request->ville_employe;
         $employe->adresse_employe = $request->adresse_employe;
         $employe->date_naissance_employe = $request->date_naissance_employe;
         $employe->photo_employe = $request->photo_employe; // Assurez-vous que votre formulaire a l'attribut 'enctype="multipart/form-data"'
         $employe->id_departement = $request->id_departement;
         $employe->id_poste = $request->id_poste;
 
         $user->employe()->save($employe);
         
 
         return redirect('superadmin/superadmin/list');
    }


    public function delete($id)
    {
        
        $user = User::getSingle($id);
        $user->is_deleted = 1;
        $user->save();
        return redirect('superadmin/superadmin/list')->with('success', "utilisateur supprime.");
    }



}
