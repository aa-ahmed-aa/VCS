@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:100px;">
{!! Form::open(array('route'=>'movies.store', 'method'=>'POST')) !!}
    {!! Form::token() !!}

    
        <h2>Update Movie</h2>
        <div style="padding-left:50px;">
            <div class="form-group">
                {!! Form::label('Title') !!}
                {!! Form::text('title',$movie->title ,array("style"=>"float: right;margin-right: 750px;")) !!}
            </div>

            <div class="form-group">
                {!! Form::label('duration') !!}
                {!! Form::text('duration',$movie->duration,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('rate') !!}
                {!! Form::text('rate',$movie->rate ,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('director') !!}
                {!! Form::text('director',$movie->director ,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('main_actor') !!}
                {!! Form::text('main_actor',$movie->main_actor ,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
        </div>
    {!! Form::submit('Update Movie') !!}
{!! Form::close() !!}
</div>  
@endsection