@extends('app.app')
@section('title', 'Contact Us')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    <h2 class="title">Contact Us</h2>
                    {{--<p class="category">.....Tag line .....</p>--}}
                </div>
                <div class="content">

                    {!! Form::open([ 'route' => 'contact.send'  ]) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name','Name', [ 'class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('name',null, [ 'class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong> </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email','Email', [ 'class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('email',null, [ 'class' => 'form-control']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong> </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        {!! Form::label('message','Message', [ 'class' => 'col-md-4 control-label']) !!}
                        {!! Form::textarea('message',null, [ 'class' => 'form-control']) !!}
                        @if ($errors->has('message'))
                            <span class="help-block"><strong>{{ $errors->first('message') }}</strong> </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!!Form::submit('Send Message', ['class' => 'btn btn-primary btn-fill btn-wd']) !!}
                    </div>

                    {!!Form::close()!!}


                </div>
            </div>
        </div>
    </div>

@endsection