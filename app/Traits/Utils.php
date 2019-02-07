<?php
namespace App\Traits;

trait Utils
{

    /**
     * @param $values
     * @return mixed
     */
    public function sum($values){
        return $values[0] + $values[1];
    }

    /**
     * @param $values
     * @return mixed
     */
    public function subtraction($values){
        return $values[0] - $values[1];
    }

    /**
     * @param $values
     * @return mixed
     */
    public function division($values){
         return $values[1] == 0 ? 'Division by zero' : $values[0] / $values[1];
    }

    /**
     * @param $values
     * @return mixed
     */
    public function multiplication($values){
        return $values[0] * $values[1];
    }
}