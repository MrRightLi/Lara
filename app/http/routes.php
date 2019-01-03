<?php
//
$app['router']->get('/test', function() {
	return '<h1>路由成功!!!</h1>';
});

$app['router']->get('/', 'App\Http\Controllers\WelcomeController@index');