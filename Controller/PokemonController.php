<?php

class PokemonController
{
    public static function index()
    {
        $model = new PokemonModel();
        $model->getAllRows();

        include 'View/modules/Pokemon/ListaPokemon.php';
    }

    public static function form()
    {
        $model = new PokemonModel();

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        
        $model->region = $model->getAllRegions();
        $model->pokemontypes = $model->getAllPokemonTypes();

        include 'View/modules/Pokemon/FormPokemon.php';
    }

    public static function save()
    {
        $pokemon = new PokemonModel();

        $pokemon->id = $_POST['id'];
        $pokemon->nome = $_POST['nome'];
        $pokemon->numero = $_POST['numero'];
        $pokemon->imagem = $_POST['imagem'];
        $pokemon->id_Pokemon_Types = $_POST['id_Pokemon_Types'];
        $pokemon->id_Region = $_POST['id_Region'];
        $pokemon->save();        

        header("Location: /pokemon");
    }

    public static function delete()
    {
        $model = new PokemonModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /pokemon");
    }
}