<?php

namespace App\Http\Controllers;

use App\Model\Information;

class ISIPController extends Controller
{
    public function show(){
        $information = Information::all()->first()->toArray();
        return $information;
    }
}
