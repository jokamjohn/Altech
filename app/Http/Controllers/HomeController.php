<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
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
//        $this->middleware('guest');
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

    /**Show the contact Form.
     * 
     * @return mixed
     */
    public function contact()
    {
        return view('pages.contact');
    }

    public function send(ContactRequest $request)
    {
        return $request->all();
    }
}
