@extends('layouts.app')


@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editer employe</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
            @include('_message')
                <!-- form start -->
                <form  action="" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Nom Complet</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom et Prenom" value="{{ $getRecord->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer Email" value="{{ $getRecord->email }}" required >
                           
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot De Passe" >
                        </div>
                        <div class="form-group">
                            <label for="user_type">Type de l'employe </label>
                            <select name="user_type" id="user_type" class="form-control">
                                <option value="1" >Super Admin</option>
                                <option value="2" >Responsable (Admin)</option>
                                <option value="3" >Employe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="matricule_employe">Matricule employé</label>
                            <input type="number" class="form-control" name="matricule_employe" id="matricule_employe" placeholder="Matricule Employe" value="{{ $getRecord->employe->matricule_employe }}" >
                           
                        </div>
                        <div class="form-group">
                            <label for="matricule_cnss_employe">Matricule CNSS de l'employé</label>
                            <input type="number" class="form-control" name="matricule_cnss_employe" id="matricule_cnss_employe" placeholder="Matricule CNSS Employe" value="{{ $getRecord->employe->matricule_cnss_employe }}">
                        </div>
                        <div class="form-group">
                            <label for="civilite_employe">Civilité de l'employé</label>
                            <select name="civilite_employe" id="civilite_employe" class="form-control">
                                <option value="Mr" >Mr</option>
                                <option value="Mme" >Mme</option>
                                <option value="Mlle" >Mlle</option>
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <label for="cin_employe">CIN de l'employé</label>
                            <input type="text" name="cin_employe" id="cin_employe" class="form-control"   placeholder="CIN Employe" value="{{ $getRecord->employe->cin_employe }}">
                        </div>
                        <div class="form-group">
                            <label for="salaire_employe">Salaire de l'employé</label>
                            <input type="number" name="salaire_employe" id="salaire_employe"  class="form-control"  placeholder="Salaire Employe" value="{{ $getRecord->employe->salaire_employe }}">
                        </div>
                        <div class="form-group">
                            <label for="telephone_employe">Téléphone de l'employé:</label>
                            <input type="text" name="telephone_employe" id="telephone_employe" class="form-control" placeholder="GSM Employe" value="{{ $getRecord->employe->telephone_employe }}">
                        </div>
                        <div class="form-group">
                            <label for="ville_employe">Ville de naissance de l'employé</label>
                            <input type="text" name="ville_employe" id="ville_employe"  class="form-control" placeholder="Ville Employe" value="{{ $getRecord->employe->ville_employe }}">
                        </div>
                        <div class="form-group">
                            <label for="adresse_employe">Adresse de l'employé</label>
                            <input type="text" name="adresse_employe" id="adresse_employe" class="form-control" placeholder="Adresse Employe"  value="{{ $getRecord->employe->adresse_employe }}">
                        </div>
                        <div class="form-group">
                            <label for="date_naissance_employe">Date de naissance de l'employé</label>
                            <input type="date" name="date_naissance_employe" id="date_naissance_employe" class="form-control" placeholder="Date Naissance Employe" value="{{ $getRecord->employe->date_naissance_employe }}" >
                        </div>
                        <div class="form-group">
                            <label for="photo_employe">Photo de l'employé</label>
                            <input type="file" name="photo_employe" id="photo_employe"  accept="image/*" class="form-control" placeholder="Photo Employe" >
                        </div>
                        <div class="form-group">
                            <label for="id_departement">Département</label>
                            <select name="id_departement" id="id_departement" class="form-control">                               
                                @foreach ($departements as $departement)
                                    <option value="{{ $departement->id_departement }}" @if ($departement->id_departement == $getRecord->employe->id_departement) selected @endif>
                                        {{ $departement->nom_departement }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_poste">Poste</label>
                            <select name="id_poste" id="id_poste" class="form-control">                      
                                @foreach ($postes as $poste)
                                    <option value="{{ $poste->id_poste }}" @if ($poste->id_poste == $getRecord->employe->id_poste) selected @endif>
                                        {{ $poste->nom_poste }}
                                    </option>
                                @endforeach
                            </select>
                        </div>              
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->          
          </div>
          <!--/.col (left) -->
  
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script>
document.getElementById('id_departement').addEventListener('change', function() {
        var departementId = this.value;

        var posteSelect = document.getElementById('id_poste');
        posteSelect.innerHTML = '';

        var postes = {!! $postes->toJson() !!};

        var filteredPostes = postes.filter(function(poste) {
            return poste.id_departement == departementId;
        });

        filteredPostes.forEach(function(poste) {
            var option = document.createElement('option');
            option.value = poste.id_poste;
            option.text = poste.nom_poste;
            posteSelect.appendChild(option);
        });
    });
</script>


  @endsection