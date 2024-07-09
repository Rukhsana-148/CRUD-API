<?php
namespace App\Http\Controllers;

class APIController extends Controller{
protected function successfulResponse(
    $data, $message='Success', $status=200){
        return response()->json([
            'message'=> $message,
            '$posts'=>$data,

        ],$status);
    }
}