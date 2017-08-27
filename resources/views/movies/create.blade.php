@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:100px;">
{!! Form::open(array('route'=>'movies.store', 'method'=>'POST')) !!}
    {!! Form::token() !!}

    
        <h2>Add Movie</h2>
        <div style="padding-left:50px;">
            <div class="form-group">
                {!! Form::label('Title') !!}
                {!! Form::text('title',null ,array("style"=>"float: right;margin-right: 750px;")) !!}
            </div>

            <div class="form-group">
                {!! Form::label('duration') !!}
                {!! Form::text('duration',null,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('rate') !!}
                {!! Form::text('rate',null ,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('director') !!}
                {!! Form::text('director',null,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('main_actor') !!}
                {!! Form::text('main_actor',null,array("style"=>"float: right;margin-right: 750px;") ) !!}
            </div>
        </div>
    {!! Form::submit('Add Movie') !!}
{!! Form::close() !!}
</div>  
@endsection