<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PokemonController.php';
include 'Controller/PokemonTypeController.php';
include 'Controller/RegionController.php';

switch ($uri_parse)
{
    case '/pokemon';
        PokemonController::index();
    break;

    case '/pokemon/form';
        PokemonController::form();
    break;

    case '/pokemon/save';
        PokemonController::save();
    break;

    case '/pokemon/delete';
        PokemonController::delete();
    break;

    case '/pokemontypes';
        PokemonTypeController::index();
    break;

    case '/pokemontypes/form';
        PokemonTypeController::form();
    break;

    case '/pokemontypes/save';
        PokemonTypeController::save();
    break;

    case '/pokemontypes/delete';
        PokemonTypeController::delete();
    break;

    case '/regions';
        RegionController::index();
    break;

    case '/regions/form';
        RegionController::form();
    break;

    case '/regions/save';
        RegionController::save();
    break;

    case '/regions/delete';
        RegionController::delete();
    break;
}