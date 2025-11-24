<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function products()
    {
        return view('frontend.pages.all-products');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function initiatives()
    {
        return view('frontend.pages.initiatives');
    }

    // Generic fallback for other pages if needed, or explicit methods for each
    public function show($page)
    {
        if (view()->exists("frontend.pages.{$page}")) {
            return view("frontend.pages.{$page}");
        }
        abort(404);
    }
}
