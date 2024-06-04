@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">{{ $news->title }}</h1>
        <p class="text-gray-500 mb-4">{{ $news->created_at->diffForHumans() }}</p>
        @if ($news->hasMedia('images'))
            <img src="/img/{{ $news->getFirstMedia('images')->id }}/{{ $news->getFirstMedia('images')->file_name }}"
                alt="{{ $news->title }}" class="w-full h-auto max-w-xl rounded-lg">
        @endif
        <p class="">{{ $news->content }}</p>
        <a href="{{ route('news.index') }}" class="text-blue-500">Volver</a>
    </div>
@endsection
