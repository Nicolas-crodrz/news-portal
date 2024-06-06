@extends('layouts.app')

@section('content')
    <div class="container mx-auto sm:px-4 px-4 py-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Editar Noticia</h1>
        <form method="POST" action="{{ route('news.update', $news->id) }}"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título</label>
                <input type="text" name="title" id="title" value="{{ $news->title }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Contenido</label>
                <textarea name="content" id="content"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ strip_tags($news->content) }}</textarea>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar</button>
        </form>
    </div>
@endsection
