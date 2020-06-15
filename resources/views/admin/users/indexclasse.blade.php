

@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

@if (session('Addmodul'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Addmodul') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


  <center>    <div class="card-header"><b style="font-size:20px">list of classe</b></div></center>


                <div class="card-body">
                <table class="table table-hover">
    <thead>
      <tr>
      <tr>
       
    
      <th scope="col">classe</th>
       <th scope="col">student</th>
       <th scope="col">update/deleate</th>
       <th scope="col">Affected student</th>
      
     </tr>
   </thead>
   <tbody>
       @foreach ($classe as $classe)            
           <tr>
             
           
             
               <td> {{ $classe->class_name }}</td>
               <td> {{ implode(', ',$classe->users()->where('role','student')->get()->pluck('name')->toArray())}}</td>

               <td> <a href="{{ route('classe.edit', $classe->id) }}" class="btn btn-outline-info">Edit</a>
 <form action="{{ route('classe.destroy', $classe->id) }}" method="POST">
           
            @csrf
                @method('Delete')
                <button type="submit" class="btn btn-outline-danger"  data-toggle="modal" data-target="#confirmDeleteModal">Delate</button>
                </form>
                <td>
                <td> <a  href="{{ route('classe.show', $classe->id) }}"style="margin-left:-90px" class="btn btn-outline-info">Affect</a></td>
            </tr>



           </tr>
       @endforeach


    </tbody>
  </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
