<?php

    declare(strict_types=1);

    namespace App\Models;

    use App\Database\Database;
    use PDOStatement;

    /**
     * Classe herdada do Model responsável por fazer as abstrações de dados da Mídia
     * 
     * @author Mário Guilherme
     */
    class Media {
        /**
         * Método responsável por o SELECT na tabela de Midias
         * @param string $join
         * @param string $where
         * @param string $order
         * @param string $limit
         * @param string $fields
         * @param array $params
         * @return PDOStatement
         */
        public static function Select(string $join = "", string $where = "", string $order = "", string $limit = "", string $fields = "*", array $params = []) : PDOStatement {
            return (new Database("medias"))->Select($join, $where, $order, $limit, $fields, $params);
        }

        /**
         * Método responsável por o INSERT na tabela de Mídias
         * @param array $params Valores a serem inseridos (Array associativo ["field" => $value])
         * @return int ID do usuário cadastrado
         */
        public static function Insert(array $params) : int {
            return (new Database("medias"))->Insert($params);
        }
    }