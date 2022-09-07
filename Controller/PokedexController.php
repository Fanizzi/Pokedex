<?php

class PokedexController
{
    public static function index()
    {
        $model = new PokedexModel();
        $model->getAllRows();

        include 'View/modules/Pokedex/home.php';
    }

    public static function save()
    {
        $pokedex = new PokedexModel();

        $pokedex->id = $_POST['id'];
        $pokedex->nome = $_POST['nome'];
        $pokedex->numero = $_POST['numero'];
        $pokedex->imagem = $_POST['imagem'];
        $pokedex->id_Pokemon_Types = $_POST['id_Pokemon_Types'];
        $pokedex->id_Region = $_POST['id_Region'];
    }

    public static function delete()
    {
        $model = new PokedexModel;
        $model->delete( (int) $_GET['id']);

        header("Location: /pokedex");
    }
}