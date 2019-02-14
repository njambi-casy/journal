@extends('Layouts.App')
@section('content')
<div class="well">
<a href="/posts" class="btn btn-outline-primary btn-md">Back</a>

</div>


@foreach($entries as $entry)

<ul class="list-group">

	<li class="list-group-item">
		{{$entry->title}}
	</li>
	<li class="list-group-item">
		{{$entry->body}}
	</li>
<small>
		{{$entry->created_at}}
	</small>
</ul>

<hr>
<a href="/posts/{{$entry->id}}/edit" class="btn btn-outline-info btn-right">Edit</a>
<hr>

<div class="pull-right">
{!!Form::open(['action'=>['EntriesController@destroy' ,$entry->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

	{{Form::hidden('_method' ,'DELETE')}}
	{{Form::submit('Delete' ,['class'=>'btn btn-outline-danger btn-right'])}}

{!!Form::close()!!}
</div>


@endforeach

@endsection