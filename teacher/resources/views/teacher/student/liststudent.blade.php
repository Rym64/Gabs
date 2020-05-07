@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
@if (session('updatestudent'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updatestudent') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">



                <div class="card-header">Student List</div>

                <div class="card-body">
                <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Adress</th>
    
        <th scope="col">Phone</th>
        
        <th scope="col">Operation</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)            
            <tr>
            <td> {{ $user->id}}</td>
                <td> {{ $user->name}}</td>
               
                <td> {{ $user->email }}</td>
                <td> {{ $user->address }}</td>
                <td> {{ $user->phone }}</td>
                
                <td>
            

                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-info">Edit</a>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
           
            @csrf
                @method('Delete')
                <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">supprimer  !</button>
                </form>
        </td>

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
