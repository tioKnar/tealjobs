<!-- Modal Job -->

<div class="modal fade" id="modaljob{{$e}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	
    	<div class="modal-content modaljob-content">

      		
      		<div class="modal-header modaljob-header">
        		
        		<h2 class="modal-title" id="job-title">{{$job->name}}</h2>
        		<p class="job-description">{{ $job->description }}</p>
      		
      		</div>

      		<div class="modal-body">
				
				@foreach($classes as $classe)

					@if($classe->jobs_id == $job->job_id)

						<h5>{{ $classe->classes_name }}</h5>
						<strong>Durée : </strong>{{ $classe->duration }}<br>
						<strong>Ville : </strong>{{ $classe->city }}<br>
						<strong>Email : </strong>{{ $classe->mail }}<br>
						<strong>Site web : </strong>{{ $classe->link }}
						<hr>
					
					@endif

				@endforeach
      		
      		</div>

      		<div class="modal-footer">

        		<button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>

        		</button>
      		
      		</div>
    	
    	</div>
  	
	</div>

</div>