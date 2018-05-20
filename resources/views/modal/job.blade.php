<!-- Modal Job -->

<div class="modal fade" id="modaljob{{$e}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h2 class="modal-title" id="job-title">{{$result->name}}</h2>
        <p class="job-description">{{$result->description}}</p>
      </div>

      <div class="modal-body">
			<table class="table table-striped">
			  <thead>
			    <tr>
			    	<th scope="col">Centres de formation</th>
				  @foreach($results as $result)
			      	<th scope="col">{{$result->classes_name}}</th>
			      @endforeach
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">Durée</th>
			      @foreach($results as $result)
			      	<td scope="col">{{$result->duration}}</td>
			      @endforeach
			    </tr>
			    <tr>
			      <th scope="row">Coût</th>
			      @foreach($results as $result)
			      	<td scope="col">{{$result->cost}}€</td>
			      @endforeach
			    </tr>
			    <tr>
			      <th scope="row">Ville</th>
			      @foreach($results as $result)
			      	<td scope="col">{{$result->city}}</td>
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