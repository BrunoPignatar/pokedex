<?php


use Web\Controller\pokemonController;


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    ## ROTAS PARA POKEMON
    case '/pokemon':
        pokemonController::index();
    break;

    case '/pokemon/form':
        pokemonController::form();
    break;

    case '/pokemon/save':
       pokemonController::save();
    break;
    
    case '/pokemon/delete':
        pokemonController::delete();

        default:
        include 'View/modules/Pg-inicial\pagina-inicial.php';
        break;
    
}