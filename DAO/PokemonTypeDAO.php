<?php

class PokemonTypeDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        $this->conexao = new MySQL();
    }

    public function insert(PokemonTypeModel $model)
    {
        $sql = 'INSERT INTO PokemonTypes (nome)
                VALUES (?)';
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM PokemonTypes';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/PokemonTypeModel.php';

        $sql = 'SELECT * FROM PokemonTypes WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM PokemonTypes WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function update(PokemonTypeModel $model)
    {
        $sql = 'UPDATE PokemonTypes SET nome=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
}