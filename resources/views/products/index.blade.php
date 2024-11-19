@extends('layouts.app')
@section('content')
    <!-- Banner -->
    <div class="p-5 text-center bg-image"
        style="
    background-image: url('assets/landing-page-background.png');
    height: 400px;
    margin-top: 20px;
  ">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-end h-100">
                <div class="text-center text-white">
                    <h1 class="mb-3">Find Your Dream Plants Here</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner-->

    {{-- Search --}}
    <div class="container mt-4">
        <section class="mb-4 justify-content-between d-flex">
            <div class="input-group" style="width: 250px">
                <input type="search" id="form1" class="form-control form-control-sm" placeholder="Search"
                    aria-label="Search">
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="d-flex align-items-center">
                <span class="me-2">Sort</span>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">Highest</option>
                    <option value="2">Lowest</option>
                </select>
            </div>
        </section>
    </div>
    {{-- Search --}}

    {{-- Product --}}
    <div class="container">
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

        <div class="mt-5">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
    {{-- Product --}}
@endsection
