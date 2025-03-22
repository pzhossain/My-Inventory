<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function reportPage(){
        return view('pages.dashboard.report-page');
    }
}
