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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $classe->classes_name }}</h5>
                    <p class="card-text">
                        <strong>Ville : </strong>{{ $classe->city }}<br>
                        <strong>Durée : </strong>{{ $classe->duration }} mois<br>
                        <strong>Email : </strong>{{ $classe->mail }}<br></p>
                    <p class="card-text"><small class="text-muted">Site web : <a href="{{ $classe->link }}">{{ $classe->link }}</a></small></p>
                </div>
            </div>
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