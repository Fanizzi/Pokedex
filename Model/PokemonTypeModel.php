<?php

class PokemonTypeModel
{
    public $id, $nome;

    public $rows;

    public function save()
    {
        include 'DAO/PokemonTypeDAO.php';

        $dao = new PokemonTypeDAO();

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
        include 'DAO/PokemonTypeDAO.php';

        $dao = new PokemonTypeDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PokemonTypeDAO.php';

        $dao = new PokemonTypeDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokemonTypeModel;
    }

    public function delete(int $id)
    {
        include 'DAO/PokemonTypeDAO.php';

        $dao = new PokemonTypeDAO;
        $dao->delete((int) $id);

        header('Location: /pokemontypes');
    }
}