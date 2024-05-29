@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Crear Noticia</h1>
    <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Título</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-300 p-2 rounded">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700">Contenido</label>
            <textarea name="content" id="content" class="w-full border border-gray-300 p-2 rounded"></textarea>
        </div>
        <div class="mb-4">
            <label for="media" class="block text-gray-700">Adjuntar Archivos Multimedia</label>
            <input type="file" name="media[]" id="media" class="w-full border border-gray-300 p-2 rounded" multiple>
            <p class="text-sm text-gray-500">Puedes adjuntar imágenes, videos, PDFs, etc.</p>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>
</div>
@endsection
