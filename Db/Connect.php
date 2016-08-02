<?php
namespace Db;

/**
 * Class Connect: Singleton class to return the DB connection instance using PDO.
 * 
 * @ref: http://php.net/manual/en/book.pdo.php
 * @package Db
 */
class Connect
{
    const DB_NAME = 'color_votes';
    const DB_SERVER = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';

    private static $_connect;

    public static function GetConnection()
    {
        if(null !== self::$_connect) {
            return self::$_connect;
        }

        return self::$_connect = new \PDO(
            'mysql:host=' . self::DB_SERVER . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PASS
        );
    }
}

