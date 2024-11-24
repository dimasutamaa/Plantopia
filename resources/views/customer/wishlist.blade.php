@extends('layouts.app')

@section('content')
    <div class="container mb-3">
        <h3 class="mb-4 fw-semibold">Wishlist</h3>
    </div>

    {{-- Search --}}
    @if (count($wishlists) > 0)
        <div class="container mt-4">
            <section class="mb-4 justify-content-between d-flex">
                <div class="input-group" style="width: 250px; height: 35px">
                    <input type="search" id="form1" class="form-control form-control-sm" placeholder="Search"
                        aria-label="Search">
                    <button type="button" class="btn btn-primary btn-sm">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </section>
        </div>
    @endif
    {{-- Search --}}

    {{-- Product --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($wishlists as $item)
                <div class="col">
                    <a href="{{ route('products.show', $item->product->id) }}"
                        class="link-underline link-underline-opacity-0">
                        <div class="bg-transparent border-0 card">
                            <img src="{{ asset($item->product->product_image) }}" class="card-img-top rounded-4"
                                alt="card example" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->product->title }}</h5>
                                <p class="card-text">{{ 'Rp ' . number_format($item->product->price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="mx-auto text-center text-secondary-emphasis">
                    <h4>Your wishlist is empty</h4>
                    <a href="{{ route('shop') }}"
                        class="fs-6 link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                        Explore our products
                    </a>
                </div>
            @endforelse
        </div>

        <div class="mt-5">
            {{ $wishlists->links('pagination::bootstrap-5') }}
        </div>
    </div>
    {{-- Product --}}
@endsection
