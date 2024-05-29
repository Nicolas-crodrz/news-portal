@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{ $news->title }}</h1>
    <p>{{ $news->content }}</p>
    <a href="{{ route('news.index') }}" class="text-blue-500">Volver</a>
</div>
@endsection
