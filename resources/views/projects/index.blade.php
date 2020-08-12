@extends('layout')

@section('title', 'Porfolio')


@section('content')
	<h1>@lang('Porfolio')</h1>

	<a href="{{ route('projects.create') }}">Crear Proyecto</a>
	<ul>

		@forelse($projects as $project)
			<li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
		{{ $projects->Links() }}
	</ul>;

@endsection