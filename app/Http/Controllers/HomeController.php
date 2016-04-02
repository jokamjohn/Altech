<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**Show the products page.
     * 
     * @return mixed
     */
    public function products()
    {
        return view('pages.products');
    }

    /**Show the about us page.
     * 
     * @return mixed
     */
    public function about()
    {
        return view('pages.about');
    }
}
