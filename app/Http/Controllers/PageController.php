<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function servicesIndex()
    {
        return view('pages.services.index');
    }

    public function servicesShow($slug)
    {
        return view('pages.services.show', compact('slug'));
    }

    public function caseStudiesIndex()
    {
        return view('pages.case-studies.index');
    }

    public function caseStudiesShow($slug)
    {
        return view('pages.case-studies.show', compact('slug'));
    }

    public function team()
    {
        return view('pages.team');
    }

    public function blogIndex()
    {
        return view('pages.blog.index');
    }

    public function blogShow($slug)
    {
        return view('pages.blog.show', compact('slug'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
