<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ToastrController extends Controller
{
    public function toast(){
        Toastr::error('that repository name is already taken', 'repository name error', ["positionClass" => "toast-bottom-left"]);

        return view('welcome');
    }
}
