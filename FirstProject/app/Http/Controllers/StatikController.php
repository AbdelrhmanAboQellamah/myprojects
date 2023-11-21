<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatikController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function aboud() {
        return view('aboud');
    }
    public function contact() {
        return view('contact');
    }
}