<?php

class PokedexModel
{
    public $rows;

    public function save()
    {
        $dao = new PokedexDAO();

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
        $dao = new PokedexDAO;
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PokedexDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokedexModel;
    }

    public function delete(int $id)
    {
        $dao = new PokedexDAO;
        $dao->delete( (int) $id);

        header('Location: /pokedex');
    }
}