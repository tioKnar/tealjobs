<!-- Modal Job -->

<div class="modal fade" id="modaljob{{$e}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modaljob-content">

      <div class="modal-header modaljob-header">
        <h2 class="modal-title" id="job-title">{{$result->name}}</h2>
        <p class="job-description">{{$result->description}}</p>
      </div>

      <div class="modal-body">
			<table class="table table-striped">
			  <thead>
			    <tr>
			    	<th scope="col">Centres de formation</th>
				  @foreach($classes as $class)
				  	@if($class->job_id == $result->job_id)
				  	<th scope="col"><a href="{{$class->link}}">{{$class->classes_name}}</a></th>
			      	@endif
			      @endforeach
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">Durée</th>
			      @foreach($classes as $class)
			      	@if($class->job_id == $result->job_id)
			      	<td scope="col">{{$class->duration}} mois</td>
			      	@endif
			      @endforeach
			    </tr>
			    <tr>
			      <th scope="row">Coût</th>
			      @foreach($classes as $class)
			      	@if($class->job_id == $result->job_id)
			      	<td scope="col">{{$class->cost}}€</td>
			      	@endif
			      @endforeach
			    </tr>
			    <tr>
			      <th scope="row">Ville</th>
			      @foreach($classes as $class)
			      	@if($class->job_id == $result->job_id)
			      	<td scope="col">{{$class->city}}</td>
			      	@endif
			      @endforeach
			    </tr>
			    <tr>
			      <th scope="row">Contact</th>
			      @foreach($classes as $class)
			      	@if($class->job_id == $result->job_id)
			      	<td scope="col"><a href="mailto:{{$class->mail}}">{{$class->contact}}</a></td>
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