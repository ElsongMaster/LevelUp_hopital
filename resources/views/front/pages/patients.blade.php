@extends('front.template.main')




@section('content')
<h1 class="text-center">Liste des patients</h1>
 <div class="container d-flex justify-content-evenly flex-wrap">
    @foreach ( $patients as $patient )
    <div class="card my-2" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-center">Infos Patient</h5>
          <h6 class="card-subtitle mb-2 text-muted"><span class="text-decoration-underline" >registre national: </span> <span class="text-info ps-2 fw-bold">{{$patient->registre_national}}</span></h6>
          <p class="card-text"><span class="text-decoration-underline" >Nom: </span> <span class="text-info ps-2 fw-bold">{{$patient->nom}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Prénom: </span> <span class="text-info ps-2 fw-bold">{{$patient->prenom}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Date de naissance: </span> <span class="text-info ps-2 fw-bold">{{$patient->date_naissance}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Genre: </span> <span class="text-info ps-2 fw-bold">{{$patient->genre}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Adresse: </span> <span class="text-info ps-2 fw-bold">{{$patient->adresse}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Pays: </span> <span class="text-info ps-2 fw-bold">{{$patient->pays}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Ville: </span> <span class="text-info ps-2 fw-bold">{{$patient->ville}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Code postale: </span> <span class="text-info ps-2 fw-bold">{{$patient->code_postal}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Numéro de Gsm: </span> <span class="text-info ps-2 fw-bold">{{$patient->num_gsm}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Nom personne de contact: </span> <span class="text-info ps-2 fw-bold">{{$patient->personne_contact}}</span></p>
          <p class="card-text"><span class="text-decoration-underline" >Numéro personne de contact: </span> <span class="text-info ps-2 fw-bold">{{$patient->num_personne_contact}}</span></p>
          <div class="container d-flex justify-content-center">

              <a href="{{route('dossiermedical',$patient->id)}}" class="btn btn-primary">Dossier médicale</a>
          </div>

        </div>
      </div>
    @endforeach
 </div>
 <div class="container d-flex justify-content-center">
     
     {{$patients->links()}}
 </div>
@endsection