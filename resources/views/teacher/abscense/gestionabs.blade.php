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
        

	
		


		<!-- Si allAbsInfo affiche la table de allAbsInfo-->
		
		<form action="{{URL::to('/search')}}" method="GET" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search users"> <span class="input-group-btn">
					<div class="form-group">
				
				
	                <input name="submit" type="submit" class="btn btn-primary" value="Search" />
	            </div>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>

	            
	        

			<br>



			<h2>Liste des absence :</h2>
			<center>
			<table class="table table-striped">
		    	<thead>
		    		<tr>
					    <th>Image</th>
		        		<th>Nom etudient</th>
						<th>Classe</th>
						<th>Nom du module</th>
		        		<th>Date seance</th>
		        		<th>Detail de la seance</th>
		        		<th>Absence ou non</th>
		      		</tr>
		    	</thead>
		    	<tbody>
				@foreach($details as $user)
					

				        <td> <img src="/uploads/images/{{$user->avatar}}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;" ></td>
						<td>{{$user->name}}</td>
						@foreach ($user->classes as $classe) 
       
	                   <td>{{$classe->class_name}}</td>
                       
						<td> {{ implode(', ',$user->moduls()->get()->pluck('modul')->toArray())}}</td>
						<td> {{ implode(', ',$user->absenses()->get()->pluck('date_absence')->toArray())}}</td>
                        <td> {{ implode(', ',$user->absenses()->get()->pluck('commentaire')->toArray())}}</td>
                        <td> {{ implode(', ',$user->absenses()->get()->pluck('absente')->toArray())}}</td>
                       
					
					
                    @endforeach
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>
				</tbody>
	  		</table>
			
		</center>

	</div>

	<!-- footer -->
	
</body>
</html>
@endsection