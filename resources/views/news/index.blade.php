@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Noticias</h1>
        <a href="{{ route('news.create') }}"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Crear
            Noticia</a>



        @foreach ($news as $newsItem)
            <div class="bg-white shadow-md rounded my-4 p-4">
                <h2 class="text-xl font-semibold">{{ $newsItem->title }}</h2>
                <!-- Agregar imagen si existe -->
                @if ($newsItem->hasMedia('images'))
                    <img src="{{ $newsItem->getFirstMediaUrl('images') }}" alt="{{ $newsItem->title }}"
                        class="my-2 w-full h-auto">
                @endif
                <!-- Mostrar solo parte del contenido -->
                <p>{{ Str::limit($newsItem->content, 150) }}</p>
                <!-- Agregar enlace para leer la noticia completa -->
                <a href="{{ route('news.show', $newsItem->id) }}" class="text-blue-500">Leer más</a>
                <!-- Agregar botón de editar y formulario de eliminar -->
                <div class="mt-4">
                    <a href="{{ route('news.edit', $newsItem->id) }}" class="text-blue-500">Editar</a>
                    <form action="{{ route('news.destroy', $newsItem->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-4">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
