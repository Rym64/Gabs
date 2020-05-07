@extends('layouts.app')

@section('content')

<h1><center>list of Modul</center></h1>
    
<table class="table table-hover">
    <thead>
      <tr>
       
        <th scope="col">semester</th>
       
       
      </tr>
    </thead>
    <tbody>
        @foreach ($modul as $module)            
            <tr>
              
               
                <td> {{ $module->semester }}</td>
                
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection