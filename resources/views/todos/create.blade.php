@extends('layouts.app')
@section('content')
    <h1>Create a Todo</h1>

    {!! Form::open(['action' => 'TodosController@store','method'=>'post']) !!}
    <div class="form-group">
        {{Form::label('text', 'Title')}}
        {{Form::text('text', '',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['class'=>'form-control','placeholder'=>'Enter Todo here...'])}}
    </div>
    <div class="form-group">
        {{Form::label('due', 'Due Date')}}
        {{Form::text('due', '',['class'=>'form-control','placeholder'=>'Due Date'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    @endsection