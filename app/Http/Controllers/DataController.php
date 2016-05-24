<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

use App\Http\Requests;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counts = Data::latest()->paginate();

        return view('client.data.index', compact('counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = new Data();
        $count->name = $request->get('name');
        $count->count = $request->get('count');
        $count->save();

        return response("Object stored with ID: " . $count->id . " Name: " . $count->name . " count: " . $count->count, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function today(Request $request)
    {
        $range = $request->get('range', 24);

        $count = Data::spanningHours($range)
            ->selectRaw('HOUR(created_at) as hour, count as count')
            ->groupBy('hour')
            ->orderBy('created_at')
            ->pluck('count', 'hour');

        return $count;
    }
}
