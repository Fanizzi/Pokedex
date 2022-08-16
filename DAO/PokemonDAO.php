<?php

class PokemonDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(PokemonModel $model)
    {
        $sql = "INSERT INTO Pokemon (nome, id_Pokemon_Types, id_Regions)
                VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id_Pokemon_Types);
        $stmt->bindValue(3, $model->id_Regions);

        $stmt->execute();
    }

    public function selectPokemonTypes()
    {
        $sql = "SELECT * FROM PokemonTypes";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectRegions()
    {
        $sql = "SELECT * FROM Regions";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once "Model/PokemonModel.php";

        $sql = "SELECT * FROM Pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM Pokemon WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function update(PokemonModel $model)
    {
        $sql = 'UPDATE Pokemon SET nome=?, id_Pokemon_Types=?, id_Region=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id_Pokemon_Types);
        $stmt->bindValue(3, $model->id_Region);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }
}