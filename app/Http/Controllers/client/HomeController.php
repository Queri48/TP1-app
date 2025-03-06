<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil(){
        return view("client.home");
    }

    public function detail(){
        return view("client.articles");
    }
}
