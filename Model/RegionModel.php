<?php

class RegionModel
{
    public $id, $nome;

    public $rows;

    public function save()
    {
        $dao = new RegionDAO();

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
        $dao = new RegionDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new RegionDAO;
        
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new RegionModel;
    }

    public function delete(int $id)
    {
        $dao = new RegionDAO;
        $dao->delete((int) $id);

        header('Location: /regions');
    }
}