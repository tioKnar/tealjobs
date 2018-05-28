
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


// $(document).ready(function(){

//     setTimeout(function(){

//         $('.lead-subtitle').fadeOut("slow", 1000, function(){

//         	$('.lead-title').fadeOut("slow", 1500, function(){
//         	//animation complete
// 	        });
// 	    });
// 	}, 1500);

// });

$(function() {

// Modal info

	$('#modalhistory_job').modal('show');

// Rangement random des différentes réponses

	var collection = $(".bouton").get();

	collection.sort(function() {

		return Math.random()*10 > 5 ? 1 : -1; 
	});

	$.each(collection, function(i, el) {

		$(el).appendTo($(el).parent().parent());
	});


// Création d'un événement au clic sur une réponse 

	$tab = [];

	$('.bouton').on('click', function(e) {

		e.preventDefault();


		// Passage à la question suivante en Jquery

		$(this).parent().fadeOut(450);

		$(this).parent().next().delay(451).fadeIn(450);

		$(this).parent().next().append('<button class="previous btn btn-warning">Précédent</button>');


		// Remplissage du tableau pour récupérer le profil psychologique

		$tab.push($(this).attr('data-id'));


		// Récupération des deux plus grandes valeurs du tableau

		$tabOcc = { };

		for(i=0; i < $tab.length; i++){
			if($tabOcc[$tab[i]]){
				$tabOcc[$tab[i]] ++;
			}
			else{
				$tabOcc[$tab[i]] = 1;
			}
		}

		console.log($tabOcc);

		var max = Math.max.apply(null,Object.keys($tabOcc).map(function(x){ return $tabOcc[x] }));

		$max = Object.keys($tabOcc).filter(function(x){ return $tabOcc[x] == max; });
	
		$a = $max[0];
		console.log($a);
		console.log($max);

		$max_1 = Object.keys($tabOcc).filter(function(y){ return $tabOcc[y] == max-1; });

		$b = $max_1[0];
		console.log($b);
		console.log($max_1);

		if($max.length >= 2) {

			$c = $max[0] + $max[1];
		}
		else if($max.length == 1 && $max_1.length >= 1) {

			$c = $max[0] + $max_1[0];
		}

		console.log($c);

		// Envoi des deux plus grandes valeurs vers la page résultats

		($('#result_tree').attr('value', $c));


		// Envoi du tableau des profils psychologique vers la base de données

		($('#result_chart').attr('value', $tab));


		// Affichage de l'image de progression du test d'orientation

		if($tab.length >= 1 && $tab.length <= 3) {
			$('#grow').html('<img src="images/grow02.png" alt="grow02">');
		}
		else if($tab.length >= 4 && $tab.length <= 8) {
			$('#grow').html('<img src="images/grow03.png" alt="grow03">');
		}
		else if($tab.length >= 9 && $tab.length <= 13) {
			$('#grow').html('<img src="images/grow04.png" alt="grow04">');
		}
		else if($tab.length >= 14 && $tab.length <= 18) {
			$('#grow').html('<img src="images/grow05.png" alt="grow05">');
		}
		else if($tab.length == 19) {
			$('#grow').html('<img src="images/grow06.png" alt="grow06">');
		}
		else {
			window.setTimeout(function(){$("#resultat").removeAttr("hidden");}, 450);
			window.setTimeout(function(){$("#endtest").removeAttr("hidden");}, 450);
			$('.previous').remove();
		}
	});

// Création d'un événement au clic sur précédent

	$('body').on('click', '.previous', function(e) {

		e.preventDefault();

		$(this).parent().fadeOut(450);
			
		$(this).parent().prev().delay(451).fadeIn(450);

		$(this).fadeOut(450);

		$tab.pop();
	});
	
});

