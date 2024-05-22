<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class LandingPageController extends Controller
{
    function index() {
        $title = config('app.name');
        $beritas = Berita::orderBy('created_at', 'DESC')->paginate(3);
        return view('landing-page.index', compact('title', 'beritas'));
    }
}
