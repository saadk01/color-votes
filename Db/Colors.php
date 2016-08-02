<?php

namespace Db;

/**
 * Class Colors: Contains queries and direct interaction with database for `colors` table and/or inter-related operations.
 * 
 * @package Db
 */
class Colors
{
    /**
     * Gets all colors in the system.
     *
     * @return array
     */
    public static function GetAll()
    {
        $q = "SELECT * FROM colors";

        $pdo = Connect::GetConnection();
        $statement = $pdo->prepare($q);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}