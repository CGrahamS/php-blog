<?php
    require_once __DIR__.'/../vendor/autoload.php';

    $app = new Silex\Application();

    $app->get("/", function() {
		return "
		<!DOCTYPE html>
		<html>
		<head>
			<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
			<title>Home Page</title>
		</head>
		<body>
			<h1>HOME</h1>
			<h1><a href='/two'>TWO</a></h1>
		</body>
		</html>
		"
		;
    });

    $app->get("/two", function() {
    	return "
    	<!DOCTYPE html>
    	<html>
    	<head>
    		<title>TWO</title>
    	</head>
    	<body>
    		<h1>TWO</h1>
    		<h1><a href='/'>HOME</a>
    	</body>
    	</html>
    	"
    	;
    });

    return $app;
?>
