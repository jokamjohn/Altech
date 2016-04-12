<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClientAuthController extends Controller
{

    /**
     * ClientAuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return mixed
     */
    public function dashboard()
    {
        if (Auth::check())
        {
            if (Auth::user()->client == 1)
            {
                return view('client.dashboard.home');
            }
        }

        return view('home');
    }
}
