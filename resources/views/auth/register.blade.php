@extends('layouts.app')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        {{ __('404 - Page Not Found') }}
                    </div>

                    <div class="flex-auto p-6 text-center">
                        <h1 class="text-4xl font-bold mb-4">404</h1>
                        <p class="text-lg mb-4">Sorry, the page you are looking for could not be found.</p>
                        <a href="{{ url('/') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Go Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
