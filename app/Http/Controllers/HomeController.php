<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function service() {
        return view('pages.services');
    }

    public function portfolio() {
        return view('pages.portfolio');
    }

    public function singleportfolio()
    {
        return view('pages.single-portfolio');
    }

    public function faq() {
        return view('pages.faq');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function singleblog()
    {
        return view('pages.single-post');
    }
}
