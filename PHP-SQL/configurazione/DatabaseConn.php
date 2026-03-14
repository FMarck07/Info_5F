<?php

class DatabaseConn
{
    private static ?PDO $db = null;

    public static function getDB(array $config): PDO
    {
        // controllo che sia setta da qualcuno e propro a settarla con new PDO mentre se è già settata allora la ritorno
        // posso creare solo una connessione ritorna sempre lo stesso
        // non posso entrare dentro un database con due connessioni
        if(!isset(self::$db)){
            // usiamo try catch perchè nel DB configuration abbimo messo un try-catch
            try{
                self::$db = new PDO($config['dsn'], $config['username'], $config['password'], $config['options']);
            }catch (PDOException $e){
                self::$db = null;
            }
        }
        return self::$db;
    }
}
