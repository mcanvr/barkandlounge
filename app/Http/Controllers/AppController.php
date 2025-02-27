<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class AppController extends Controller
{
    public function home()
    {
        $blogs = json_decode(file_get_contents(public_path('blogs.json')), true);
        return view('home', ['blogs' => $blogs]);
    }

    public function blogDetail($slug)
    {
        $blog = json_decode(file_get_contents(public_path('blogs.json')), true);
        $blog = collect($blog)->firstWhere('slug', $slug);
        if (!$blog) {
            abort(404);
        }
        return view('blog-detail', ['blog' => $blog]);
    }

    public function setLocale($locale)
    {
        Session::put('locale', $locale);
        App::setLocale($locale);
        return redirect()->back();
    }
}
