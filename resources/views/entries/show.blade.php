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


@endforeach

@endsection