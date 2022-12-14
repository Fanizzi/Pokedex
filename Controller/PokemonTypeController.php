<?php

class PokemonTypeController
{
    public static function index()
    {
        $model = new PokemonTypeModel();
        $model->getAllRows();

        include 'View/modules/PokemonTypes/ListaPokemonTypes.php';

    }

    public static function form()
    {
        $model = new PokemonTypeModel();

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        
        include 'View/modules/PokemonTypes/FormPokemonTypes.php';
    }

    public static function save()
    {
        $pokemontype = new PokemonTypeModel();
        
        $pokemontype->id = $_POST['id'];
        $pokemontype->nome = $_POST['nome'];
        $pokemontype->save();

        header("Location: /pokemontypes");
    }

    public static function delete()
    {
        $model = new PokemonTypeModel();
        $model->delete((int) $_GET['id']);

        header("Location: /pokemontypes");
    }
}
