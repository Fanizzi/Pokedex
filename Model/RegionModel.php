<?php

class RegionModel
{
    public $id, $nome;

    public $rows;

    public function save()
    {
        include 'DAO/RegionDAO.php';

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
        include 'DAO/RegionDAO.php';

        $dao = new RegionDAO();
        $this->rows = $dao->select();
    }

    public function getById()
    {
        include 'DAO/RegionDAO.php';

        $dao = new RegionDAO;
        
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new RegionModel;
    }

    public function delete(int $id)
    {
        include 'DAO/RegionDAO.php';

        $dao = new RegionDAO;
        $dao->delete((int) $id);

        header('Location: /regions');
    }
}