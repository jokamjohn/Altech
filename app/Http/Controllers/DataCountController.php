<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

use App\Http\Requests;

class DataCountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function today()
    {
        $counts = Data::today()->latest()->paginate();

        return view('client.data.today', compact('counts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function yesterday()
    {
        $counts = Data::yesterday()->latest()->paginate();

        return view('client.data.yesterday', compact('counts'));
    }

    public function lastWeek()
    {
        
    }
}
