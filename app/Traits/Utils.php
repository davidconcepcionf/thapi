<?php
namespace App\Traits;

trait Utils
{


    /**
     * @return mixed
     */
    public function sum(){
        return request()->values[0] + request()->values[1];
    }

    /**
     * @return mixed
     */
    public function subtraction(){
        return request()->values[0] - request()->values[1];
    }

    /**
     * @return mixed
     */
    public function division(){
         return request()->values[1] == 0 ? 'Division by zero' : request()->values[0] / request()->values[1];
    }

    /**
     * @return mixed
     */
    public function multiplication(){
        return request()->values[0] * request()->values[1];
    }
}