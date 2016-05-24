<?php

namespace App\Http\Controllers;

use App\Count;
use App\Http\Requests;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function today(Request $request)
    {
        $range = $request->get('range', 24);

        $count = Count::spanningHours($range)
            ->selectRaw('HOUR(created_at) as hour, count as count')
            ->groupBy('hour')
            ->orderBy('created_at')
            ->pluck('count', 'hour');

        return $count;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function todayChart()
    {
        return view('client.charts.today');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dataToday()
    {
        return view('client.charts.data.today');
    }

    public function dataYesterday()
    {
        return view('client.charts.data.yesterday');
    }
}
