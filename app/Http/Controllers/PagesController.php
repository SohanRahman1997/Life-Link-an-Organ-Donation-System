<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      return view('pages.index');
    }
    public function review(){
      return view('pages.review');
    }
    public function about(){
      return view('pages.about');
    }

    public function organ(){
      return view('pages.organ');
    }

    public function home(){
      return view('pages.home');
    }

}