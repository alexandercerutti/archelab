<?php
/* Il file contiene tutte le direttive per reindirizzare le chiamate - Modificare solo per aggiungere */

	Flight::map('to', function($page, $name = ""){
		Flight::render($page, [
			'domain' => '/architettura'
			, 'name' => $name
		], 'router');
		Flight::render("services/template");
	});

	Flight::route('GET /', function(){
		Flight::to("pagine/news");
	});
	Flight::route("GET /news", function(){
		Flight::to("pagine/news", 'News');
	});
	Flight::route("GET /intro", function(){
		Flight::to("pagine/intro", "Introduzione al corso");
	});
	Flight::route("GET /docenti", function(){
		Flight::to("pagine/docenti", "Docenti e orari");
	});
	Flight::route("GET /modesami", function(){
		Flight::to("pagine/modesami", "Modalità d'esame");
	});
	Flight::route("GET /materiale", function(){
		Flight::to("pagine/materiale", "Materiale didattco");
	});
	Flight::route("GET /lezioni", function(){
		Flight::to("pagine/lezioni", "Lezioni");
	});
	Flight::route("GET /esami", function(){
		Flight::to("pagine/esami", "Esami");
	});
	Flight::route("GET /tutorato", function(){
		Flight::to("pagine/tutorato", "Tutorato");
	});

	/* Risorsa non trovata - 404 */
	Flight::map('notFound', function(){
		Flight::to("services/404", "Not Found");
	});

?>