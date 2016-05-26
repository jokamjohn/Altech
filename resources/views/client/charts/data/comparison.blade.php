@extends('client.dashboard.main.app')

@section('title','Today`s Count Chart')

@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="header">
                    <h4 class="title">Comparison Count Dummy Data</h4>
                    <h3>Today And Yesterday</h3>
                </div>

                <compare-graph url="/today/data/count" url2="/yesterday/data/count"></compare-graph>

            </div>
        </div>
    </div>

@endsection