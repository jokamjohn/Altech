@extends('client.dashboard.main.app')

@section('title','Yesterday`s Count Chart')

@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="header">
                    <h4 class="title">Yesterday Count Dummy Data</h4>
                </div>

                <hour-graph url="/yesterday/data/count"></hour-graph>

            </div>
        </div>
    </div>

@endsection