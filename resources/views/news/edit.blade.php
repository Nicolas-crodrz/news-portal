@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Editar Noticia</h1>
    <form method="POST" action="{{ route('news.update', $news->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Título</label>
            <input type="text" name="title" id="title" value="{{ $news->title }}" class="w-full border border-gray-300 p-2 rounded">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700">Contenido</label>
            <textarea name="content" id="content" class="w-full border border-gray-300 p-2 rounded">{{ $news->content }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
    </form>
</div>
@endsection
