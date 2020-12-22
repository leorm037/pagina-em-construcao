<?php

ob_start();

ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(url(), ":");


/**
 * ######################
 * ###   WEB ROUTES   ###
 * ######################
 */
$route->namespace("PaginaEmConstrucao\Controller");
$route->get("/", "Web:home");


/**
 * ########################
 * ###   ERROR ROUTES   ###
 * ########################
 */
$route->namespace("PaginaEmConstrucao\Controller")->group("/ops");
$route->get("/{errcode}", "Web:error");


/**
 * #################
 * ###   ROUTE   ###
 * #################
 */
$route->dispatch();

/**
 * ##########################
 * ###   ERROR REDIRECT   ###
 * ##########################
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
