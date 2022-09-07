<?php

class RegionController
{
    public static function index()
    {
        $model = new RegionModel();
        $model->getAllRows();

        include 'View/modules/Regions/ListaRegions.php'; 
    }

    public static function form()
    {
        $model = new RegionModel();

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        
        include 'View/modules/Regions/FormRegions.php';
    }

    public static function save()
    {
        $region = new RegionModel();

        $region->id = $_POST['id'];
        $region->nome = $_POST['nome'];
        $region->save();

        header('Location: /regions');
    }

    public static function delete()
    {
        $model = new RegionModel();
        $model->delete((int) $_GET['id']);

        header('Location: /regions');
    }
}