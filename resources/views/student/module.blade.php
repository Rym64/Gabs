@extends('layouts.app')

@section('content')

<h1>Séances</h1>
    
<table class="table table-hover">
    <thead>
      <tr>
 
        <th scope="col">id</th>
        <th scope="col">modul</th>
      
        
      </tr>
    </thead>
    <tbody>
        @foreach ($module as $modl)            
            <tr>
            
                <td> {{ $modl->id}}</td>
                <td> {{ $modl->modul }}</td>
               
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection