@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian Kiri: Gambar Produk -->
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center">
                    <!-- Gambar utama -->
                    <img src="{{ asset($product->product_image) }}" class="border rounded-4 img-fluid" alt="Main Product"
                        style="width: 70%;">
                </div>
            </div>

            <!-- Bagian Kanan: Detail Produk -->
            <div class="col-md-6">
                <div class="product-details">
                    <!-- Judul Produk -->
                    <h2 class="fw-bold">{{ $product->title }}</h2>
                    <span class="float-end">
                        <i class="fa-regular fa-heart fa-xl"></i>
                    </span>
                    <h5 class="fw-bold"> Description</h5>

                    <!-- Deskripsi -->
                    <p class="text-muted">
                        {{ $product->description }}
                    </p>
                    <!-- Quantity dan Tombol Add to Cart -->
                    <div class="mt-3 d-flex align-items-center">
                        <label for="quantity" class="me-3 fw-bold">Quantity:</label>
                        <select class="form-select me-2" id="floatingSelect" aria-label="Floating label select example"
                            style="width:60px">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button class="btn fw-medium btn-success">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3 class="fw-bold">Similar Plants</h3>
        <div class="row">
            @forelse ($similar_products as $similar_product)
                <div class="col">
                    <x-product-card :product="$similar_product" />
                </div>
            @empty
                <div class="mt-3 text-center text-muted">
                    <h5>this plant does not have similar plants yet</h5>
                </div>
            @endforelse
        </div>
    </div>
@endsection
