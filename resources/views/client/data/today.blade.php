@extends('client.dashboard.main.app')

@section('title','Today Counts')

@section('content')


    @if($counts->count())

        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Today Counts</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Count</th>
                                <th>Created</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($counts as $count)
                                <tr>

                                    <th>
                                        {{ $count->name }}
                                    </th>

                                    <th>
                                        {{ $count->count }}
                                    </th>

                                    <th>
                                        {{ $count->created_at->toDayDateTimeString() }}
                                    </th>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @else
        @include('message',[ 'title'=>'Count' ,'message' => 'You have no counts now '])
    @endif

    {!! $counts->render() !!}




@endsection