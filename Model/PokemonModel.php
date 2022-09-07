<?php

class PokemonModel
{
    public $id, $nome, $numero, $imagem;

    public $region, $pokemontypes;

    public $rows;

    public function save()
    {
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
        $dao = new PokemonDAO;
        $this->rows = $dao->select();
    }

    public function getAllPokemonTypes()
    {
        $dao = new PokemonTypeDAO();
        return $dao->select();
    }

    public function getAllRegions()
    {
        $dao = new RegionDAO();
        return $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PokemonDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokemonModel;
    }

    public function delete(int $id)
    {
        $dao = new PokemonDAO;
        $dao->delete( (int) $id);

        header('Location: /pokemon');
    }
}