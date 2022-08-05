<?php

    declare(strict_types=1);

    namespace App\Models;

    use App\Database\Database;
    use PDOStatement;

    /**
     * Classe de Modelo responsável por fazer as abstrações de dados do Projeto.
     * @author Mário Guilherme
     */
    class Project {
        /**
         * Método responsável por realizar seleções na tabela de Projetos.
         * @param string $join Join com outras tabelas
         * @param string $where Condição para o SELECT
         * @param string $fields Campos da tabela
         * @param array $params Parâmetros da SQL (array [$value])
         * @return PDOStatement Objeto PDOStatement com o resultado da seleção
         */
        public static function select(string $join = "", string $where = "", string $fields = "*", array $params = []) : PDOStatement {
            return (new Database("projects"))->select($join, $where, $fields, $params);
        }

        /**
         * Método responsável por realizar inserções na tabela de Projetos.
         * @param array $values Valores a serem inseridos (array associativo ["field" => $value])
         * @return int ID do projeto cadastrado
         */
        public static function insert(array $params) : int {
            return (new Database("projects"))->insert($params);
        }

        /**
         * Método responsável por realizar atualizações na tabela de Projetos.
         * @param string $where Condição para atualização
         * @param array $values Valores a serem atualizados (array associativo ["field" => $value])
         * @return bool True se a atualização for bem sucedida
         */
        public static function update(string $where, array $values) : bool {
            return (new Database("projects"))->update($where, $values);
        }

        /**
         * Método responsável por realizar exclusões na tabela de Projetos.
         * @param string $where Condição para exclusão
         * @param array $params Parâmetros da SQL (array [$value])
         * @return bool True se a exclusão for bem sucedida
         */
        public static function delete(string $where, array $params) : bool {
            return (new Database("projects"))->delete($where, $params);
        }
    }