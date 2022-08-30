<?php

namespace Web\Controller;
use Web\Model\pokemonModel;
use Web\DAO\pokemonDAO;

class pokemonController
{
    public static function index()
    {

        $model = new pokemonModel();
        $model->getAllRows();

        include 'View/modules/pokemon\Listapokemon.php';
    }

    public static function form()
    {

        $model = new pokemonModel;

        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/pokemon/Formpokemon.php';
    }

    public static function save()
    {

        $pokemon = new pokemonModel();

        $pokemon->id = $_POST['id'];
        $pokemon->descricao = $_POST['descricao'];

        $pokemon->save(); 

        header("Location: /pokemon"); 
        
    }
    public static function delete()
    {

        $model = new pokemonDAO();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /pokemon"); // redirecionando o usuário para outra rota.

    }




}