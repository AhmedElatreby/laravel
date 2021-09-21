<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserWeight extends Controller
{
    //
    public function loadView()
    {
        return view ("weight",['weight'=>"82Kg"]);
    }
}
