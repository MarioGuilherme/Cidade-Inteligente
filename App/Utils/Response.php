<?php

    declare(strict_types=1);

    namespace App\Utils;

    /**
     * Classe responsável por tratar as respostas do servidor
     *
     * @author Mário Guilherme
     */
    class Response {
        /**
         * Método responsável por carregar as respostas do servidor
         * @return void
         */
        public static function LoadResponses() : void {
            require "responses.php";
        }

        /**
         * Método responsável retornar uma resposta para
         * o SweetAlert e em seguida encerrar o script
         * @param array $response
         * @return void
         */
        public static function Message(array $response) : void {
            echo json_encode($response);
            exit;
        }
    }