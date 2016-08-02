<?php

namespace Db;

/**
 * Class Votes: Contains queries and direct interaction with database for `votes` table and/or inter-related operations.
 * 
 * @package Db
 */
class Votes
{
    /**
     * Gets the total number of votes ever posted for a given color.
     *
     * @param $colorId
     * @return array
     */
    public static function GetTotalColorVotes($colorId)
    {
        $q = "SELECT COALESCE (SUM(votes), 0) as total_votes FROM votes WHERE color_id = :colorId";

        $pdo = Connect::GetConnection();
        $statement = $pdo->prepare($q);
        $statement->execute(array(':colorId' => $colorId));

        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
}