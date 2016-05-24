@extends('client.dashboard.main.app')

@section('title','Today`s Count Chart')

@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="header">
                    <h4 class="title">Today`s Count Dummy Data</h4>
                </div>

                <hour-graph url="/today/data/count"></hour-graph>

            </div>
        </div>
    </div>

@endsection