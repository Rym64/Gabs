
@extends('layouts.app')

@section('content')

<h1>Séances</h1>
    
<table class="table table-hover">
    <thead>
      <tr>
 
        <th scope="col">Date séance</th>
        <th scope="col">Heure début</th>
        <th scope="col">Heure fin</th>
        <th scope="col">type séance</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($seance as $seanc)            
            <tr>
            
                <td> {{ $seanc->date}}</td>
                <td> {{ $seanc->Heure_debut }}</td>
                <td> {{ $seanc->Heure_fin }}</td>
                <td>{{ $seanc->type}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection