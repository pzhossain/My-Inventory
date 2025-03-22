<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function productPage(){
        return view('pages.dashboard.product-page');
    }
}
