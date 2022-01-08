@extends('front.template.main')




@section('content')
<h1 class="text-center">Détails des consultations : {{$hopital->nom}}</h1>
 <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Nom docteur</th>
            <th scope="col">Local</th>
            <th scope="col">Nom patient</th>
            <th scope="col">Statut consultation</th>
            <th scope="col">maladie</th>
            {{-- {{dd(count($consultations))}} --}}

          </tr>
        </thead>
        <tbody>

        @foreach ($consultations as $consultation )
            
        <tr>
        <th scope="row">{{$consultation->dateHeure}}</th>
        <td>{{$docteurs[$consultation->id-1]->nom}}</td>
        <td>{{$locaux[$consultation->id-1]->nom}}</td>
        <td>{{$patients[$consultation->id-1]->nom}} {{$patients[$consultation->id-1]->prenom}}</td>
        <td>{{$statutconsultations[$consultation->id-1]->nom}}</td>
        @if (in_array($consultation->id,$tabIdConsultationWithDossiermedical))
        
         <td>{{App\Models\Dossiermedical::where('idConsultation','=',$consultation->id)->get()[0]->diagnostique}}</td>
         @else
         <td>traité</td>
            
        @endif

        </tr>
        @endforeach



    </tbody>
</table>
<div class="container d-flex justify-content-center">

    {{$consultations->links()}}
</div>

</div>   
@endsection