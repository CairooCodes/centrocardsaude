<?php

abstract class Conexao{

    /*nesta classe só utilizo o meu user e a senha do do DB*/
    const USER = "root";
    const PASS = "root";

    private static $instance = null;

    private static function conectar(){

        try{
            if(self::$instance == null):
                /*Abaixo mostro a instancia de qual DB estou utilizando e o nome do database*/
                $dsn = "mysql:host=localhost;dbname=centrocard";
                self::$instance = new PDO($dsn, self::USER, self::PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            endif;
        }catch (PDOException $e){
            echo "Erro: ".$e->getMessage();
        }
        return self::$instance;
    }

    protected static function getDB(){
        return self::conectar();
    }
}
?>