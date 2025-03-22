<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customerPage(){
        return view ('pages.dashboard.customer-page');
    }
}
