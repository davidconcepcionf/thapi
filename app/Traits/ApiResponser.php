<?php

namespace App\Traits;


trait ApiResponser
{
   /**
     * @param $data
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse($data, $code = 200) {
        //$data['code'] = $code;
        return response()->json($data, $code, ['content-type' => 'application/json', 'cache-control' => 'no-cache']);
    }

    /**
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse($message, $code) {
        if (is_string($message)) {
            //$message = ['message' => [$message]];
        }
        return response()->json(['result' => $message, 'status' => 'error'], $code);
    }



    protected function response($data, $code = 200) {
        //$data['code'] = $code;
        return response()->json($data, $code, ['content-type' => 'application/json', 'cache-control' => 'no-cache']);
    }

}
