<?php
/**
 * Created by PhpStorm.
 * User: ilyatau
 * Date: 16/11/18
 * Time: 13:57
 */

namespace ilyatau\yii2_openroute_service;


class Coordinate
{
    public $latitude;
    public $longitude;

    /**
     * Coordinate constructor.
     * @param $latitude
     * @param $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }


}