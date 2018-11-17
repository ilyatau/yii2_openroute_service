<?php
/**
 * Created by PhpStorm.
 * User: ilyatau
 * Date: 16/11/18
 * Time: 13:55
 */

namespace ilyatau\yii2_openroute_service;


class Direction extends BaseClass
{
    const API_PATH = 'directions';
    const METHOD = 'get';
    public $coordinates=[];

    public $profile = 'driving-car';
    public $preference = 'fastes';
    public $units = 'm';
    public $language = 'en';
    public $geometry = 'false';
    public $instructions = 'false';



    /**
     * @return mixed
     */
    public function getCoordinates() : array
    {
        return $this->coordinates;
    }

    /**
     * @param mixed $coordinates
     */
    public function setCoordinates($coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    public function find(){
        try {
            $this->request([
                'coordinates'=>implode('|',$this->getCoordinates()),
                'profile'=>$this->profile,
                'preference'=>$this->preference,
                'units'=>$this->units,
                'language'=>$this->language,
                'geometry'=>$this->geometry,
                'instructions'=>$this->instructions,
            ]);
        } catch (\Exception $e) {
        }

    }




}