@extends('layouts/app')

@section('content')

<div class="container-fluid" id="boutonadmin">
	<div class="row justify-content-center text-center">
		
		<a href="historychart" class="col-md-2 administration" id="pageactive">Diagramme</a>

		<a href="historytree" class="col-md-2 administration">Arbre à métier</a>

		<a href="historylist" class="col-md-2 administration">Liste des métiers</a>

	</div>

	<div class="row justify-content-center text-center">
		<div class="col- col-md-8">
			<canvas id="myChart"></canvas>
	    </div>
	</div>

</div>

<script>

	$(function() {
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ["Travaillomane", "Empathique", "Rebelle", "Rêveur", "Persévérant", "Promoteur"],
		        datasets: [{
		            label: ["Profil psychologique"],
		            data: [{{$user->travaillomane}},
		            	   {{$user->empathique}},
		            	   {{$user->rebelle}},
		            	   {{$user->reveur}},
		            	   {{$user->perseverant}},
		            	   {{$user->promoteur}}],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		})
	});
</script>


@endsection