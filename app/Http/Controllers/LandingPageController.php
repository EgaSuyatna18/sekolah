<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index() {
        $title = config('app.name');
        return view('landing-page.index', compact('title'));
    }
}
