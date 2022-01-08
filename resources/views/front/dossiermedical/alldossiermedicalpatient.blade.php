@extends('front.template.main')




@section('content')
<div class="container d-flex justify-content-between align-items-center ">

    <h1><span class="text-decoration-underline"> Voici les différents dossiers médicaux du paitent:</span> <span class="ps-2 fw-bold">{{$patient->nom}} {{$patient->prenom}}</span> </h1>
    <span>n° de registre: {{$patient->registre_national}}</span>
</div>

<div class="container d-flex flex-wrap justify-content-evenly mx-auto">
    @foreach ($patient->dossiermedicals as $dossiermedical )
        
        <div class="card text-center  my-3 img-thumbnail">
            <div class="card-body">
                <h5 class="card-title fw-bold">Dossier pour la maladie: {{$dossiermedical->maladie->nom}}</h5>
                <p class="card-text"><span class="text-decoration-underline">Examiné par:</span> <span class="ps-2 text-secondary fw-bold">{{App\Models\Consultation::find($dossiermedical->idConsultation)->docteur->nom}}</span></p>
                <p class="card-text"><span class="text-decoration-underline">Diagnostique:</span> <span class="ps-2 text-secondary fw-bold">{{$dossiermedical->diagnostique}}</span></p>
                <p class="card-text"><span class="text-decoration-underline">Statut du dossier:</span> <span class="ps-2 text-secondary fw-bold">{{$dossiermedical->statutdossiermed->nom}}</span></p>

                {{-- <button type="button" class="btn btn-secondary">VIEW MORE</button> --}}
            </div>
        </div>

        
    @endforeach
</div>




@endsection