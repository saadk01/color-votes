<?php

namespace Manager;
use Db;

/**
 * Class VotesManager: Manager class that is accessible to API and can communicate with DB/model.
 *
 * @package Manager
 */
class VotesManager
{
    /**
     * Implements GET method for this entity. Can be extended depending upon future requirements.
     *
     * @param $colorId
     * @return array
     */
    public function Get($colorId)
    {
        $votes = Db\Votes::GetTotalColorVotes($colorId);
        return $votes;
    }
}