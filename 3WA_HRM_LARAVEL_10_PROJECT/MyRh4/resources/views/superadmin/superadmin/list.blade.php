@extends('layouts.app')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste des employes</h1>
          </div>
          <div class="col-sm-6" style="text-align: right; ">
            <a href="{{ url('superadmin/superadmin/add') }}" class="btn btn-primary"> Ajouter un nouvel employe</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
         
            <!-- /.card -->

            <div class="card">
              
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nom complet</th>
                      <th>Email</th>
                      <th>Type d'employe</th>
                      <th>Matricule employé</th>
                      <th>Matricule CNSS de l'employé</th>
                      <th>Civilité de l'employé</th>
                      <th>Département</th>
                      <th>Poste</th>
                      <th>CIN de l'employé</th>
                      <th>Salaire de l'employé</th>
                      <th>Téléphone de l'employé</th>
                      <th>Ville de naissance de l'employé</th>
                      <th>Adresse de l'employé</th>
                      <th>Date de naissance de l'employé</th>
                      <th>Photo de l'employé</th>                   
                      <th>Cree le</th>
                      <th>Actions</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                              @if ($user->user_type == 1)
                                    Super Admin
                              @elseif ($user->user_type == 2)
                                    Responsable (Admin)
                              @elseif ($user->user_type == 3)
                                    Employé
                              @endif
                        </td>
                        <td>{{ $user->employe->matricule_employe }}</td>
                        <td>{{ $user->employe->matricule_cnss_employe }}</td>
                        <td>{{ $user->employe->civilite_employe }}</td>
                        <td>{{ $user->employe->departement->nom_departement }}</td>
                        <td>{{ $user->employe->poste->nom_poste }}</td>
                        <td>{{ $user->employe->cin_employe }}</td>
                        <td>{{ $user->employe->salaire_employe }}</td>
                        <td>{{ $user->employe->telephone_employe }}</td>
                        <td>{{ $user->employe->ville_employe }}</td>
                        <td>{{ $user->employe->adresse_employe }}</td>
                        <td>{{ $user->employe->date_naissance_employe }}</td>
                        <td>{{ $user->employe->photo_employe }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><a href="{{ url('superadmin/superadmin/edit' , ['id' => $user->id] ) }}" class="btn btn-primary btn-sm mb-1">modifier</a>
                            <a href="{{ url('superadmin/superadmin/delete' , ['id' => $user->id] ) }}) }}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>






  @endsection