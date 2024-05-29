@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Noticias</h1>
    <a href="{{ route('news.create') }}" class="bg-blue-500 text-red px-4 py-2 rounded hover:bg-blue-600">Crear Noticia</a>

    @foreach($news as $newsItem)
        <div class="bg-white shadow-md rounded my-4 p-4">
            <h2 class="text-xl font-semibold">{{ $newsItem->title }}</h2>
            <p>{{ $newsItem->content }}</p>
            <a href="{{ route('news.edit', $newsItem->id) }}" class="text-blue-500">Editar</a>
            <form action="{{ route('news.destroy', $newsItem->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Eliminar</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
