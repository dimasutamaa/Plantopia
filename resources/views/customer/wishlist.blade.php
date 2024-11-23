@extends('layouts.app')

@section('content')

    <div class="container mb-3">
        <h3 class="fw-semibold mb-4">Wishlist</h3>
    </div>

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
        </section>
    </div>
    {{-- Search --}}

    {{-- Product --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://placehold.jp/100x100.png" class="card-img-top" alt="card example" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="https://placehold.jp/100x100.png" class="card-img-top" alt="card example" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="https://placehold.jp/100x100.png" class="card-img-top" alt="card example" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">

        </div>
    </div>
    {{-- Product --}}
@endsection
