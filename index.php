<?php
	require_once 'data/services/flight/Flight.php'; /* framework per routing */
	require_once "data/services/main.php"; /* tutte le funzioni usate */
	Flight::set("flight.views.path", "data");
	require_once 'data/services/controller.php'; /* routing e caricamento template */
	Flight::start();
?>