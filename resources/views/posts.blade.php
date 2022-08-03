@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($data as $item)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $item->url }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->explanation }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $item->date }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-3 d-flex justify-content-center">
        {{ $data->links() }}
    </div>
</div>
@endsection
