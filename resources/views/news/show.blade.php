@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $news->title }}</h1>
            <p class="text-sm text-gray-500 mb-4">{{ $news->created_at->diffForHumans() }}</p>
            @if ($news->hasMedia('images'))
                <div class="mb-6">
                    <img src="/img/{{ $news->getFirstMedia('images')->id }}/{{ $news->getFirstMedia('images')->file_name }}"
                        alt="{{ $news->title }}" class="w-full h-auto max-w-2xl mx-auto rounded-lg shadow-md">
                </div>
            @endif
            <div class="prose prose-lg max-w-none text-gray-800">
                {!! htmlspecialchars_decode(nl2br(e($news->content))) !!}
            </div>
            <div class="mt-8">
                <a href="{{ route('news.index') }}" class="inline-block text-blue-500 hover:text-blue-700">
                    &larr; Volver a noticias
                </a>
            </div>
        </div>
    </div>
@endsection
