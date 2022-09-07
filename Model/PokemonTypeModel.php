<?php

class PokemonTypeModel
{
    public $id, $nome;

    public $rows;

    public function save()
    {
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
        $dao = new PokemonTypeDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PokemonTypeDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokemonTypeModel;
    }

    public function delete(int $id)
    {
        $dao = new PokemonTypeDAO;
        $dao->delete((int) $id);

        header('Location: /pokemontypes');
    }
}