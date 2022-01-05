@extends('front.template.main')




@section('content')
<h1 class="text-center">Listes des hopitaux</h1>
 <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $hopitals as $hopital )
        

            <tr>
            <th scope="row">{{$hopital->id}}</th>
            <td>{{$hopital->nom}}</td>
            <td>{{$hopital->adresse}}</td>

            </tr>
        @endforeach


        </tbody>
      </table>

</div>   
@endsection