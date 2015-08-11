<?php
	
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/CoinCombination.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app){
		return $app['twig']->render('home_page.html.twig');
	});
	
	$app->get("/coin_combination", function() use ($app){
		$coin_selector = new CoinCombination;
		$coin_combination = $coin_selector->makeChange($_GET['amount']);
		return $app['twig']->render('coin_combination_results.html.twig', array('result' => $coin_combination));
	});
	
	
	
	return $app;
?>