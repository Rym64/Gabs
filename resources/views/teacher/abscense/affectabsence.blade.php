

@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enseignant Page</title>

	

</head>
<body>
	
	<div class="container">


	<hr>


		<table class="choix">
			<tr>
				<td>
					<div class="form-group">
			            <label for="date_sea">Date seance</label>
			        	<input name="date_sea" class="form-control" type="text" placeholder="yyyy-mm-dd">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <label for="heure_deb">Heure debut</label>
			        	<input name="heure_deb" class="form-control" type="text" placeholder="hr-mn-ss">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <label for="heure_fin">Heure fin</label>
			        	<input name="heure_fin" class="form-control" type="text" placeholder="hr-mn-ss">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <input name="submit" type="submit" class="btn btn-primary" value="Afficher" />
			        </div>
				</td>
			</tr>
		</table>



        

			<h2>Info sur la Seance :</h2>
			<table class="table table-striped">
		    	<thead>
		    		<tr>
		        		<th>Module</th>
		        		<th>Date seance</th>
		        		<th>Heure debut</th>
		        		<th>Heure fin</th>
		        		<th>Type seance</th>
		      		</tr>
		    	</thead>
		    	<tbody>
			
				</tbody>
	  		</table>


			<h2>Liste des etudiants :</h2>
			<center>
			<table class="table table-striped">
		    	<thead>
		    		<tr>
		        		<th>CNE</th>
		        		<th>Nom</th>
		        		<th>Prenom</th>
		        		<th>Affecter une absence</th>
		        		<th>Absence déja affecter</th>
		      		</tr>
		    	</thead>
		    	<tbody>
				

 @foreach ($classe->classes as $classe) 
       
       
       
       
	   <tr>
			 <td>  {{ $classe->class_name}} </td>
		 
		 @foreach ($classe->users as $cls)   
		
			 <td>  {{ $cls->name}}</td>
			 @endforeach
		  
					 @endforeach
					 </select>
 
 
					 
 
		 </td>
 

				</tbody>
	  		</table>
				
			</center>
        
      


		<br>



	</div>
		<!-- footer -->
	
</body>
	


</html>
@endsection