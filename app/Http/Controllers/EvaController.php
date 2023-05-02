<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaController extends Controller
{
    public function index(){
        $this->duckProcess(5);
        $this->duckProcess2(5);
    }

    private function duckProcess(int $parameter) {
        if($parameter>5){
            if($parameter<10){
                echo $parameter;
            }else{
                echo 56;
            }
        }
}
    private function duckProcess2(int $parameter) {
        if($parameter>5){
            if($parameter<10){
                echo $parameter;
            }else{
                echo 56;
            }
        }
    }
}
