<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getjson(Request $request){
        $response = [];

        $base = "https://gateau-chocolat.cognitiveservices.azure.com/customvision/v3.0/prediction/c4e4cb71-6972-4fb5-9461-d2ae7949a486/detect/iterations/gc/image";
    }
}
