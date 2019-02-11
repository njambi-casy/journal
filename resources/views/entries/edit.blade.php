@extends('Layouts.App')

@section('content')
<div class="jumbotron">
<h1>EDIT POST</h1>

@foreach($entries as $entry)
{!! Form::open(['action' =>['EntriesController@update' ,$entry->id]  ,'method'=>'POST']) !!}
<div class="form-group">
	{{Form::label('title','Title')}}
	{{Form::text('title',$entry->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}

	
	{{Form::label('body','Body')}}
	{{Form::textarea('body',$entry->body ,['class'=>'form-control', 'placeholder'=>'Your thoughts'])}}
	
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Save', ['class'=>'btn btn-outline-primary'])}}


</div>
{!! Form::close() !!}
@endforeach

@endsection