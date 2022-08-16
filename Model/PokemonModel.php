<?php

class PokemonModel
{
    public $id, $nome;

    public $rows;

    public function save()
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();
        $this->rows = $dao->selectPokemonTypes();
    }

    public function getAllRegions()
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();
        $this->rows = $dao->selectRegions();
    }

    public function getById(int $id)
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokemonModel;
    }

    public function delete(int $id)
    {
        include 'DAO/PokemonDAO.php';

        $dao = new PokemonDAO;
        $dao->delete( (int) $id);

        header('Location: /pokemon');
    }
}