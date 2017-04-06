<?php
	date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Post.php';

    session_start();
    if (empty($_SESSION['list_of_posts'])) {
    	$_SESSION['list_of_posts'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    		'twig.path' => __DIR__.'/../views'
    	));

    $app->get("/", function() use ($app) {
		return $app['twig']->render('home.html.twig');
    });

    $app->get("/create_post", function() use ($app) {
    	$new_post = new Post($_GET['title']);
    	$new_post->save();
    	return $app['twig']->render('create_post.html.twig');
    });

    $app->get("/new_post", function() use ($app) {
    	return $app['twig']->render('new_post.html.twig', array('posts' => Post::getAll()));
    });

    return $app;
?>
