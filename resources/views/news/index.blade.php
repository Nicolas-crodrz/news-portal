@extends('layouts.app')

@section('content')
    @if (session()->has('flash_notification.message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: '{{ session('flash_notification.level') === 'danger' ? 'error' : 'success' }}',
                    title: '{{ session('flash_notification.level') === 'danger' ? 'Error' : 'Éxito' }}',
                    text: '{{ session('flash_notification.message') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            });
        </script>
    @endif
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">News</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            @if (session()->has('flash_notification.message'))
                <div class="flash-message {{ session('flash_notification.level') }}">
                    {{ session('flash_notification.message') }}
                    <div class="progress-bar"></div>
                </div>
            @endif
            <div class="flex flex-wrap -m-4">
                @foreach ($news as $newsItem)
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6"
                                src="/img/{{ $newsItem->getFirstMedia('images')->id }}/{{ $newsItem->getFirstMedia('images')->file_name }}"
                                alt="{{ $newsItem->title }}">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
                                {{ $newsItem->title }}</h3>
                            <p class="leading-relaxed text-base">{!! htmlspecialchars_decode($newsItem->content) !!}</p>
                            <div class="mt-4">
                                <a href="{{ route('news.show', $newsItem->id) }}"
                                    class="text-indigo-500 inline-flex items-center">Leer mas...</a>
                                <a href="{{ route('news.edit', $newsItem->id) }}"
                                    class="mx-4 text-blue-500 inline-flex items-center">Editar</a>
                                <a href="#" class="text-red-500 inline-flex items-center"
                                    onclick="confirmDelete({{ $newsItem->id }})">Eliminar</a>
                                <form id="delete-form-{{ $newsItem->id }}"
                                    action="{{ route('news.destroy', $newsItem->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <p class="text-sm text-gray-500 mb-4 inline-flex mx-14">
                                    {{ $newsItem->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <script>
            function confirmDelete(newsId) {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminarlo'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + newsId).submit();
                    }
                })
            }
        </script>
    </section>
@endsection
