@extends('layouts.app')

@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">News</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach ($news as $item)
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="/img/{{ $item->getFirstMedia('images')->id }}/{{ $item->getFirstMedia('images')->file_name }}" alt="{{ $item->title }}">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $item->title }}</h3>
                            <p class="leading-relaxed text-base">{!! htmlspecialchars_decode($item->content)!!}</p>
                            <div class="mt-4">
                                <a href="{{ route('news.show', $item->id) }}" class="text-indigo-500 inline-flex items-center">Leer mas...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
