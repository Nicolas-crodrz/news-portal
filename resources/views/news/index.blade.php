@extends('layouts.app')

@section('content')
    <div class=" bg-gray-100  lg:py-12 lg:flex lg:justify-center lg:flex-col  lg:items-center ">
        <h1 class="text-2xl font-bold mb-4">Noticias</h1>
        <a href="{{ route('news.create') }}"
            class="bg-blue-500 hover:bg-blue-400 px-4 py-2 text-white font-bold border-b-4 border-blue-700 hover:border-blue-500 rounded">Crear
            Noticia</a>
    </div>
    @foreach ($news as $newsItem)
        <div class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
            <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                <div class="lg:w-1/2">
                    <div class="h-64 bg-cover lg:rounded-lg lg:h-full">
                        @if ($newsItem->hasMedia('images'))
                            <img src="/img/{{ $newsItem->getFirstMedia('images')->id }}/{{ $newsItem->getFirstMedia('images')->file_name }}"
                                alt="{{ $newsItem->title }}">
                        @endif
                    </div>
                </div>
                <div class="py-12 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
                    <h2 class="text-3xl text-gray-800 font-bold">{{ $newsItem->title }}
                    </h2>
                    {{-- P --}}
                    <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem modi
                        reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam
                        mollitia
                        iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.</p>
                    <div class="mt-8">
                        <a href="{{ route('news.show', $newsItem->id) }}"
                            class="bg-gray-900 text-gray-100 px-5 py-3 font-semibold rounded">Leer mas...</a>
                        <a href="{{ route('news.show', $newsItem->id) }}"
                            class="bg-blue-500 text-gray-100 px-5 py-3 font-semibold rounded">Editar</a>
                        <a href="{{ route('news.show', $newsItem->id) }}"
                            class="bg-red-500 text-gray-100 px-5 py-3 font-semibold rounded">eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach
@endsection
