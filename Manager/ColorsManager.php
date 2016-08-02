<?php

namespace Manager;
use Db;

/**
 * Class ColorsManager: Manager class that is accessible to API and can communicate with DB/model.
 *
 * @package Manager
 */
class ColorsManager
{
    /**
     * Implements GET method for this entity. Can be extended depending upon future requirements.
     * 
     * @return array
     */
    public function Get()
    {
        $colors = Db\Colors::GetAll();
        return $colors;
    }
}