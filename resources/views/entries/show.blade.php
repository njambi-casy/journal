@extends('Layouts.App')
@section('content')

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
<div class="well">
<a href="/posts" class="btn btn-outline-primary btn-md">Back</a>

</div>


@endforeach

@endsection