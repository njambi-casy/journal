@extends('Layouts.App')

@section ('content')
<div class="container">
	<h2>Entries</h2>

	@if(count($entries)>0)
	@foreach($entries as $entry)
	<div class="well">
		<ol class="list-group">
		<li class="list-group-item"><a href="/posts/{{$entry->id}}">
			<h2>{{$entry->title}}</h2></a>
		<small>Written on.{{$entry->created_at}}</small>
	
	</li>
	</div>
	</ol>
	@endforeach
	{{$entries->links()}}

	@else
	<div class="container">
		NO FILES FOUND
	</div>

	@endif

</div>
<hr>
<a href="/posts/create" class="btn btn-outline-primary btn-lg">Add an entry</a>

@endsection