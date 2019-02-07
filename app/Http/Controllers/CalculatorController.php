<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use App\Traits\Utils;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CalculatorController extends Controller
{
    use ApiResponser;
    use Utils;

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function calc(Request $request)
    {
        $rules = [
            'values' => 'required|array|size:2',
            'values.*'=> 'integer',
            'operation'  => 'required|string|'.Rule::in(['sum','subtraction','division','multiplication'])
        ];
        $this->validate($request, $rules);

        $result = $this->{$request->operation}($request->values);

        $data = [
            'result' => $result,
            'status' =>is_numeric($result) ? 'OK' : 'error'
        ];
        $code = is_numeric($result) ? 200 : 422;
        return $this->response($data,$code);
    }
}
