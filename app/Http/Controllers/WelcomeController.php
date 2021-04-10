<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class WelcomeController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        return view('welcome', compact('prices'));
    }
}
