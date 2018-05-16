@extends('layouts.app')

	@section ('content')

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2>Test</h2>
					<form action="?step=1" id="step1" method="POST" class="form-group" name="step1">
						@csrf
						<p>question</p>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<button type="submit">next</button>
					</form>
					<form action="?step=2" id="step2" method="POST" class="form-group" name="step2" style="display:none;">
						@csrf
						<p>question</p>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<!-- <button type="submit">back</button> -->
							<button type="submit">next</button>
					</form>
					<form action="?step=3" id="step3" method="POST" class="form-group" name="step3" style="display:none;">
						@csrf
						<p>question</p>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<input type="checkbox" value="id" id="1"><label for="1">réponse</label><br>
							<!-- <button type="submit">back</button> -->
							<button type="submit">next</button>
					</form>
				</div>
			</div>
		</div>

	@endsection



