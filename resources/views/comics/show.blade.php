@extends('layouts.app')

@section('title', 'Fumetto')

@section('content')
<main class="bg-dark">
    <section class="container mb-4">
        <h1 class="text-white">{{$product['title']}}</h1>
        <div class="row gy-4">
            <div class="col-12 w-50">
                <div class="card">
                    <img src="{{$product['thumb']}}" alt="{{$product['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$product['title']}}</h5>
                        <p class="card-text">{{$product['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-primary d-flex py-4">
        <div class="container d-flex justify-content-between align-items-center p-3">
            @foreach ($content as $el)
            <img src="{{$el['img']}}" alt="" class="blue-bar-image">
            <span class="p-2 text-uppercase text-light">{{ $el['text'] }}</span>
            @endforeach
        </div>
    </div>
</main>
@endsection
