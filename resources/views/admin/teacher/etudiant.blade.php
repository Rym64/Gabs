@extends('layouts.app')

@section('content')

<h1><center>liste etudiant</center></h1>
    
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">adresse</th>
    
        <th scope="col">phone</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($etudiants as $etudiant)            
            <tr>
                <td> {{ $etudiant->name}}</td>
               
                <td> {{ $etudiant->email }}</td>
                <td> {{ $etudiant->address }}</td>
                <td> {{ $etudiant->phone }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection