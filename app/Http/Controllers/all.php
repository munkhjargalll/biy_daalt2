<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class all extends Controller
{
    //
    public function index(Request $req){
        $getapi = $this->getapi();
        $list = $getapi['Global'];
        return view('all', compact('list'));
        
    }

    private function getapi(){
        return $medeelel = Http::get("https://api.covid19api.com/summary");
    }
}
