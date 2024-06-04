@extends('layouts.app')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap  justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">{{ __('Dashboard') }}
                    </div>
                    <div class="flex-auto p-6">
                        @if ($news->count() > 0)
                            <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
                                @foreach ($news as $item)
                                    <a href="#"
                                        class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline w-fill">
                                        <div class="flex w-full justify-between">
                                            <h5 class="mb-1">{{ $item->title }}</h5>
                                            <small>{{ $item->created_at->diffForHumans() }}</small>
                                        </div>
                                        <p class="mb-1">{{ $item->content }}</p>
                                        <!-- Mostrar imagen -->
                                        @if ($item->hasMedia('images'))
                                            <img src="/img/{{ $item->getFirstMedia('images')->id }}/{{ $item->getFirstMedia('images')->file_name }}"
                                                alt="{{ $item->title }}" class="my-4 h-auto">
                                        @endif
                                        <a href="{{ route('news.show', $item->id) }}">Leer más</a>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p>No hay noticias disponibles.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
