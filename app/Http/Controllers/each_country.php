<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class each_country extends Controller
{
    public function index(Request $req){
        $getapi = $this->getapi();
        $list = $getapi['Countries'];
        return view('each', compact('list'));
    }

    private function getapi(){
        return $medeelel = Http::get("https://api.covid19api.com/summary");
    }
}
