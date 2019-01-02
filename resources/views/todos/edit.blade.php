@extends('layouts.app')
@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-default">Back</a>
<h1>Edit Todo</h1>

{!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'post']) !!}
{{Form::hidden('_method','PUT')}}
<div class="form-group">
    {{Form::label('text', 'Title')}}
    {{Form::text('text',$todo->text,['class'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $todo->body,['class'=>'form-control','placeholder'=>'Enter Todo here...'])}}
</div>
<div class="form-group">
    {{Form::label('due', 'Due Date')}}
    {{Form::text('due', $todo->due,['class'=>'form-control','placeholder'=>'Due Date'])}}
</div>
<div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection