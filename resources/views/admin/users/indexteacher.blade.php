@extends('layouts.app')

@section('content')

@if (session('updateteacher'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateteacher') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('Adduser'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Adduser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('deleteuser'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteuser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div >
            <div class="card">



            <center>    <div class="card-header"><b style="font-size:20px">list of teacher</b></div></center>

<table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">Id</th>
      <th scope="col">Photo</th>
        <th scope="col">Name</th>

        <th scope="col">Email</th>
        <th scope="col">Adress</th>
    
        <th scope="col">Phone</th>
        <th scope="col">Role</th>
        <th scope="col">Modul</th>
        <th scope="col">Class</th>
        <th scope="col">Edit/Delate</th>

        <th scope="col">Affect modul</th>

        <th scope="col">Affect class</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($users as $user)            
            <tr>
            <td> {{ $user->id}}</td>
            <td> <img src="/uploads/images/{{$user->avatar}}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;" ></td>
            
                <td> {{ $user->name}}</td>
               
                <td> {{ $user->email }}</td>
                <td> {{ $user->address }}</td>
                <td> {{ $user->phone }}</td>
                <td> {{ $user->role }}</td>
                <td> {{ implode(', ',$user->moduls()->get()->pluck('modul')->toArray())}}</td>
                <td> {{ implode(', ',$user->classes()->get()->pluck('class_name')->toArray())}}</td>
                <td> <a href="{{ url('admin/editteacher/'.$user->id) }}" class="btn btn-outline-info">Edit</a>
             
             <form action="{{ url('admin/destroyteacher/'.$user->id) }}" method="GET">
                       
                        @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-outline-danger"  data-toggle="modal" data-target="#confirmDeleteModal">Delate</button>
            </form> 
                            
                            <td>
                            <td> <a  href="{{ url('admin/showteacher/'.$user->id) }}"style="margin-left:-90px" class="btn btn-outline-info">Affect</a></td> 
                       
                             <td> <a href="{{ url('admin/affectclasse/'.$user->id) }}"style="margin-left:-90px" class="btn btn-outline-info">Affect classe</a>
                            
                        </tr>
                    @endforeach
                    

        </td>
      </tr>
    </tbody>
  </table>
  
  
    </div>
  </div>
@endsection