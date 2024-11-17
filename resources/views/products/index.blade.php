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
                <div class="text-white text-center">
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
            <div class="col">
                <div class="card">
                    <img src="https://placehold.jp/100x100.png" class="card-img-top" alt="card example" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://placehold.jp/100x100.png" class="card-img-top" alt="card example" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
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
                            additional content. This content is a little bit longer.</p>
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
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example" class="d-flex justify-content-end mt-2"  >
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- Product --}}


@endsection
