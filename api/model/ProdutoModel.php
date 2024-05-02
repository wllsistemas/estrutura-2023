<?php

// require './core/Conexao.php';
// require './core/ExceptionPdo.php';

class ProdutoModel
{
    public static function show()
    {
        try {
            $pdo = Conexao::getInstance();

            $stmt = $pdo->prepare('SELECT * FROM tb_produto ORDER BY codigo');
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            throw new \Exception(ExceptionPdo::translateError($e->getMessage()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function find(int $codigo)
    {
        try {
            $pdo = Conexao::getInstance();

            $stmt = $pdo->prepare('SELECT * from tb_produto WHERE codigo = ?');
            $stmt->execute([$codigo]);

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            throw new \Exception(ExceptionPdo::translateError($e->getMessage()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function insert(array $data)
    {
        try {
            $pdo = Conexao::getInstance();

            $stmt = $pdo->prepare('INSERT INTO tb_produto (descricao, valor) VALUES(?, ?)');
            $stmt->execute([$data['descricao'], $data['valor']]);

            return ($stmt->rowCount() > 0);
        } catch (\PDOException $e) {
            throw new \Exception(ExceptionPdo::translateError($e->getMessage()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function update(array $data)
    {
        try {
            $pdo = Conexao::getInstance();

            $stmt = $pdo->prepare('UPDATE tb_produto SET descricao = ?, valor = ? WHERE codigo = ?');
            $stmt->execute([$data['descricao'], $data['valor'], $data['codigo']]);

            return ($stmt->rowCount() > 0);
        } catch (\PDOException $e) {
            throw new \Exception(ExceptionPdo::translateError($e->getMessage()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function delete(int $codigo)
    {
        try {
            $pdo = Conexao::getInstance();

            $stmt = $pdo->prepare('DELETE FROM tb_produto WHERE codigo = ?');
            $stmt->execute([$codigo]);

            return ($stmt->rowCount() > 0);
        } catch (\PDOException $e) {
            throw new \Exception(ExceptionPdo::translateError($e->getMessage()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function lastInsertId()
    {
        try {
            $pdo = Conexao::getInstance();

            return $pdo->lastInsertId();
        } catch (\PDOException $e) {
            throw new \Exception(ExceptionPdo::translateError($e->getMessage()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
