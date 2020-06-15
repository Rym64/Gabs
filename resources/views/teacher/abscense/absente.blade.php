@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{ route('absense.store') }}" method="post">
            @csrf

                <div class="card-header">Affecter absence</div>

                <div class="card-body">
                <table class="table table-hover">
                <div class="panel-heading">
	            
	            </div>
	            <div class="panel-body">
	             
                <div class="form-group">
	                    <label for="student">Name student </label>
	                    <select class="form-control" name="student" value="{{ old('student') }}" id="student" >
                        @foreach ($student as $student)
                        <option value="{{ $student->id }}">
                        {{ $student->name }}</option>
                        @endforeach
                        </select>                      
	                </div> 
                
                <div class="form-group">
	                    <label for="Nom_module">Modul name </label>
	                    <input class="form-control" name="Nom_module"  placeholder="nom du module" type="text" value="{{ old('Nom_module') }}" id="dNom_module" />
                        @error('Nom_module')<div class="text-danger">{{ $message }}</div> @enderror
                      
	                </div>        
                <div class="form-group">
	                    <label for="date_absence">Date seance </label>
	                    <input class="form-control" name="date_absence"  type="date" value="{{ old('date_absence') }}" id="date_absence" />
                        @error('date_absence')<div class="text-danger">{{ $message }}</div> @enderror
                      
	                </div>
	                
	                <div class="form-group">
	                    <label for="commentaire">Details seance</label>
	                    <input class="form-control" name="commentaire" placeholder="detail du seance" type="text" value="{{ old('commentaire') }}" id="commentaire"  />
                        @error('commentaire')<div class="text-danger">{{ $message }}</div> @enderror
                   
                    <div class="form-group">
                    <label for="absente">Absente</label>
<select name="absente" value="{{ old('absente') }}" id="absente" class="form-control" placeholder="">

<option>
0

</option>
<option>
1

</option>

</select>
@error('absente')<div class="text-danger">{{ $message }}</div> @enderror
</div>
        
	                <div class="form-group">
	                    <input name="submit" type="submit" class="btn btn-primary" value="valider" />
	                    <input name="cancel" type="reset" class="btn btn-default" value="Cancel" />
	                </div>
	                
	            </div>
	        </div>
  </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
