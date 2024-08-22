<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendViewsController extends Controller
{
    public function index(){
        return view("frontend.frontend_master");
    }
}
