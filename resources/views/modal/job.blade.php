<!-- Modal Job -->

<div class="modal fade" id="modaljob{{$e}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	
    	<div class="modal-content modaljob-content">

      		
      		<div class="modal-header modaljob-header">
        		
        		<h2 class="modal-title" id="job-title">{{$job->name}}</h2>
        		<p class="job-description">{{ $job->description }}</p>
      		
      		</div>

      		<div class="modal-body">
				<table class="table table-striped">
			  		
			  		<thead>

			    		<tr>
			    			<th scope="col">Centres de formation</th>	
				  			<th scope="col">Durée</th>
				  			<th scope="col">Ville</th>
				  			<th scope="col">Email</th>
				  			<th scope="col">Site web</th>
			    		</tr>

			  		</thead>
			  		
			  		<tbody>

			  			

			    		<tr>
			      			<th scope="row">Durée</th>
					      	@foreach($classes as $class)
					      		@if($class->jobs_id == $job->job_id)
					      			<td scope="col">{{ $class->duration }} mois</td>
					      		@endif
					      	@endforeach
					    </tr>		   			 
			    
			    		<tr>
			      			<th scope="row">Ville</th>
			      			@foreach($classes as $class)
			      				@if($class->jobs_id == $job->job_id)
			      					<td scope="col">{{ $class->city }}</td>
			      				@endif
			      			@endforeach
			   			 </tr>

			   			 <tr>
			      			<th scope="row">Email</th>
						     @foreach($classes as $class)
						      	@if($class->jobs_id == $job->job_id)
						      		<td scope="col">{{ $class->mail }}</td>
						      	@endif
						     @endforeach
			    		</tr>

			   			 <tr>
			      			<th scope="row">Téléphone</th>
						     @foreach($classes as $class)
						      	@if($class->jobs_id == $job->job_id)
						      		<td scope="col">{{ $class->tel }}</td>
						      	@endif
						     @endforeach
			    		</tr>

			   			 <tr>
			      			<th scope="row">Site web</th>
						     @foreach($classes as $class)
						      	@if($class->jobs_id == $job->job_id)
						      		<td scope="col">{{ $class->link }}</td>
						      	@endif
						     @endforeach
			    		</tr>	

			  		</tbody>

				</table>
      		
      		</div>

      		<div class="modal-footer">

        		<button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>

        		</button>
      		
      		</div>
    	
    	</div>
  	
	</div>

</div>