@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
@if (session('updateteacher'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateteacher') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">



                <div class="card-header">liste des utilisateur</div>

                <div class="card-body">
                <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">adresse</th>
    
        <th scope="col">phone</th>
        <th scope="col">Roles</th>
        <th scope="col">Operations</th>



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
