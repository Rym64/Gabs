@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

@if (session('Adduser'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Adduser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif




   


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{ url('teacher/affectabsence') }}" method="GET">
            @csrf


                <div class="card-header">Creation d'un Module</div>

                <div class="card-body">
                <table class="table table-hover">
                            <div class="panel-heading">
                            
                            </div>
                            <label for="name">Classes *</label>
                                    <select name="classe" class="form-control">
                                    @foreach ($users->classes as $classe) 
                                    <option value="{{ $classe->id }}" >   
                                    
                            {{ $classe->class_name}} 
                                </option>
                    
                    
                                @endforeach
                                
                                    </select>
                                </div>

                        
                                

                                <div class="form-group">
                                    <input name="submit" type="submit" class="btn btn-primary" value="afficher" />
                                    <input name="cancel" type="reset" class="btn btn-default" value="Cancel" />
                                </div>
                                
                            </div>
                        </div>
                </table>
            
                </form>













                <div >
            <div class="card">



            <center>    <div class="card-header"><b style="font-size:20px">principal page</b></div></center>

	<div class="container">
		
		<!-- header -->

		

		
 
<table class="table table-hover">
    <thead>
      <tr>

        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Modul</th>
        <th scope="col">Date Absence</th>
        <th scope="col">Details de seance</th>
        <th scope="col">Absence</th>
        <th scope="col">Affecter une absence</th>
      </tr>
    </thead>
    <tbody>
      <tr>
   


              
      @if(!empty($students))
                    @foreach($students->where('role','student') as $student)
                    <td> <img src="/uploads/images/{{$student->avatar}}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;" ></td>
            
                       <td> {{ $student->name }}</td>
                       <td> {{ implode(', ',$student->moduls()->get()->pluck('modul')->toArray())}}</td>
                       <td> {{ implode(', ',$student->absenses()->get()->pluck('date_absence')->toArray())}}</td>
                       <td> {{ implode(', ',$student->absenses()->get()->pluck('commentaire')->toArray())}}</td>
                       <td> {{ implode(', ',$student->absenses()->get()->pluck('absente')->toArray())}}</td>
                       <td> <a href="{{ url('teacher/absence/'.$student->id) }}" class="btn btn-outline-info">Affecter classe</a></td>
                    @endforeach
                @endif      

        
      </tr>
    </tbody>
  </table>





		<br>           
		
       
           
	</div>

            </div>
        </div>
    </div>
</div>
@endsection
