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
        $sql = "INSERT INTO Pokemon (nome, numero, imagem, id_Pokemon_Types, id_Region)
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->numero);
        $stmt->bindValue(3, $model->imagem);
        $stmt->bindValue(4, $model->id_Pokemon_Types);
        $stmt->bindValue(5, $model->id_Region);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Pokemon";

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
        $sql = 'UPDATE Pokemon SET nome=?, numero=?, imagem=?, id_Pokemon_Types=?, id_Region=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->numero);
        $stmt->bindValue(3, $model->imagem);
        $stmt->bindValue(4, $model->id_Pokemon_Types);
        $stmt->bindValue(5, $model->id_Region);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();
    }
}