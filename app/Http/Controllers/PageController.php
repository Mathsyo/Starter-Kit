<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function users() {
        return view('pages.users');
    }

    public function wizard() {
        return view('pages.wizard');
    }

    public function maintenance() {
        return view('pages.maintenance');
    }
}
