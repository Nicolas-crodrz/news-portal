@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @php $news = \App\Models\News::all(); @endphp
                <div class="card-body">
                    @if ($news->count() > 0)
                        <div class="list-group">
                            @foreach ($news as $item)
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $item->title }}</h5>
                                        <small>{{ $item->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1">{{ $item->content }}</p>
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
