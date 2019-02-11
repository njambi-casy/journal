@extends('Layouts.App')

@section('content')
<h1>Hey what are you thinking about?</h1>


{!! Form::open(['action' =>'EntriesController@store'  ,'method'=>'POST']) !!}
<div class="form-group">
	{{Form::label('title','Title')}}
	{{Form::text('title','', ['class'=>'form-control', 'placeholder'=>'Title'])}}

	{{Form::label('body','Body')}}
	{{Form::textarea('body','' ,['class'=>'form-control', 'placeholder'=>'Your thoughts'])}}
	
</div>
{{Form::submit('Submit', ['class'=>'btn btn-outline-primary'])}}



{!! Form::close() !!}

@endsection