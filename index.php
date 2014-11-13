<?php
require 'flight/Flight.php';

Flight::route('/', function(){
	require('frontend/main.php');
});
Flight::route('/stats', function(){
	require('frontend/stats.php');
});
Flight::route('/stats/@name', function($name){
	require('frontend/stats.php');
});
Flight::route('/about', function(){
	require('frontend/about.php');
});

Flight::start();
?>
