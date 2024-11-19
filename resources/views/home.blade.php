@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5 mb-5 text-center rounded bg-image"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
            url('assets/landing-page-background.png'); 
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
            height: 500px;">
            <div class="d-flex align-items-center h-100">
                <div class="container text-start">
                    <h1 class="mb-3 text-white" style="font-size: 7rem;">Buy your dream plants.</h1>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h2>Latest Product</h2>
            <h5 class="text-secondary">Easiest way to healthy life by buying the latest plants</h5>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($products as $product)
                <div class="col">
                    <a href="#" class="link-underline link-underline-opacity-0">
                        <div class="bg-transparent border-0 card">
                            <img src="{{ asset($product->product_image) }}" class="card-img-top rounded-4"
                                alt="card example" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="mx-auto text-center text-secondary-emphasis">
                    <h4>Data Products not yet available.</h4>
                </div>
            @endforelse
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <a href="{{ route('shop') }}"
                class="link-dark link-underline link-underline-opacity-0 link-underline-opacity-75-hover link-offset-3-hover fs-5">Browse
                All Product</a>
        </div>
    </div>
@endsection
