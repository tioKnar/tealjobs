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

<section class="histo-profiles container">

	 <div class="row justify-content-center text-justify">
        <div class="col-md-4">
          <h2 class="colo-travaillomane">Travaillomane</h2>
	          <p><span class="font-weight-bold">Logique, organisé, responsable</span>, le type travaillomane (« <span class="font-italic">thinker</span> » en anglais) est un véritable analyste. Son efficacité et sa capacité à comprendre finement les systèmes lui permettent de briller dans ses recherches. Reconnaissez ses compétences, et il sera ravi !</p>
        </div>
        <div class="col-md-4">
          <h2 class="colo-empathique">Empathique</h2>
	          <p><span class="font-weight-bold">Chaleureux, sensible, compatissant</span>, le type empathique (« <span class="font-italic">harmonizer</span> » en anglais) prend soin des autres et de l’ambiance de son groupe. Il est connecté à ses émotions et les utilise pour se positionner par rapport au monde. Pour lui, l’important c’est de se sentir aimé, et si l’ambiance est chaleureuse, il est aux anges !</p>
        </div>
        <div class="col-md-4">
          <h2 class="colo-rebelle">Rebelle</h2>
	          <p><span class="font-weight-bold">Créatif, ludique, spontané</span>, le type rebelle (« <span class="font-italic">funster</span> » en anglais) est un bout-en-train ! Il est à la recherche d’amusement dans tous ses contextes et exprime ses réactions spontanément, sans filtre. Faites-lui une blague et vous verrez ses yeux pétiller !</p>
        </div>
	 </div>

	 <div class="row justify-content-center text-justify">
        <div class="col-md-4">
          <h2 class="colo-reveur">Rêveur</h2>
	          <p><span class="font-weight-bold">Calme, imaginatif, réfléchi</span>, le type rêveur (« <span class="font-italic">imaginer</span> » en anglais) est un penseur d’une grande profondeur. Son recul et son imagination lui permettent de modéliser des idées complexes… mais aussi d’être souvent qualifié « dans la lune ». Assurez-lui de la tranquillité et il vous remerciera.</p>
        </div>
        <div class="col-md-4">
          <h2 class="colo-perseverant">Persévérant</h2>
	          <p><span class="font-weight-bold">Engagé, observateur, consciencieux</span>, le type persévérant (« <span class="font-italic">believer</span> » en anglais) est une personne de principes. Ses valeurs et ses opinons sont très importantes, et on le retrouve souvent engagé, en politique ou ailleurs, pour les défendre. Pour le satisfaire, faites confiance à son jugement ou demandez-le lui, il apprécie donner son avis !</p>
        </div>
        <div class="col-md-4">
          <h2 class="colo-promoteur">Promoteur</h2>
	          <p><span class="font-weight-bold">Adaptable, charmeur, plein de ressources</span>, le type promoteur (« <span class="font-italic">doer</span> » en anglais) est un fonceur. Donnez lui un challenge, il l’accepte dans la seconde, même s’il n’a aucune idée de comment il va le réaliser. Chez lui, c’est l’action et l’efficacité qui importe. C’est la personne à inviter à courir un marathon dans 1 mois si vous êtes sans partenaire d’entrainement !</p>
        </div>
	 </div>
	  
</section>

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