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


                <div class="card-header"><center><h3>Affect absence</h3></center></div>

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




	

		

		
 
<table class="table table-hover">
    <thead>
      <tr>

        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Absence affect</th>
      </tr>
    </thead>
    <tbody>
      <tr>
   


              
      @if(!empty($students))
                    @foreach($students->where('role','student') as $student)
                    <td> <img src="/uploads/images/{{$student->avatar}}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;" ></td>
            
                       <td> {{ $student->name }}</td>
                       <td> <a href="{{ url('teacher/absence/'.$student->id) }}" class="btn btn-outline-info">Absence affect</a></td>
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
@endsection
