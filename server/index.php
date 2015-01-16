<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

// GET路由
$app->get(
    '/',
    function () {
        echo "<p>Hello JD Hello Sim</p>";
    }
);

// POST路由
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT路由
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// DELETE路由
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

$app->run();
?>