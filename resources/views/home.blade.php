@extends('layouts.app')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="">
            <div class="">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">{{ __('Dashboard') }}
                    </div>
                    <div class="flex-auto p-6">
                        @if ($news->count() > 0)
                            <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
                                @foreach ($news as $item)
                                    <div class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
                                        <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                                            <div class="lg:w-1/2">
                                                <div class="h-64 bg-cover lg:rounded-lg lg:h-full">
                                                    @if ($item->hasMedia('images'))
                                                        <img src="/img/{{ $item->getFirstMedia('images')->id }}/{{ $item->getFirstMedia('images')->file_name }}"
                                                            alt="{{ $item->title }}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="py-12 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
                                                <h2 class="text-3xl text-gray-800 font-bold">{{ $item->title }}
                                                </h2>
                                                {{-- P --}}
                                                <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quidem modi
                                                    reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim
                                                    expedita aperiam
                                                    mollitia
                                                    iure consectetur dicta tenetur, porro consequuntur saepe accusantium
                                                    consequatur.</p>
                                                <div class="mt-8">
                                                    <a href="{{ route('news.show', $item->id) }}"
                                                        class="bg-gray-900 text-gray-100 px-5 py-3 font-semibold rounded">Leer
                                                        mas...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
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
