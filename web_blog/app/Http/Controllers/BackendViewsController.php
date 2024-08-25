<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BackendViewsController extends Controller
{
    public function index(){
        return view("backend.index");
    }
    public function category(){
        return view("backend.category.category_page");
    }
}
