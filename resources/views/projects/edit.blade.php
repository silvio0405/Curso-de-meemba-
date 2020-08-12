@extends('layout')

@section('title', 'Crear Proyecto')


@section('content')
	<h1>Editar Proyecto</h1>

	@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>

	@endif



	<form method="POST" action="{{ route('projects.store') }}">
		@csrf
		<label>
			Titulo del Proyecto<br>
			<input type="text" name="title"value="{{ $project->title }}">
		</label>
		<br>
		<label>
			URl del Proyecto<br>
			<input type="text" name="url" value="{{ $project->url }}">
		</label>
		<br>
		<label>
			Descripción del Proyecto<br>
			<textarea name="description">{{ $project->description }}</textarea>
		</label>
		<br>
		<button>Actualizar</button>
	</form>
@endsection