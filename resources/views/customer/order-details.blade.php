@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Order History -->
        <div class="mb-4">
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark" href="{{ route('orderHistory') }}">
                <i class="fa-solid fa-arrow-left-long fa-xl"></i>
                <span class="fs-5 ms-1 text-center">
                    Back to history
                </span>
            </a>
        </div>

        <h3 class="fw-bold mb-4">Order History</h3>
        <div class="card p-4">
            <div class="table-responsive">
                <table class="table table-borderless align-middle">
                    <thead>
                        <tr class="border-bottom">
                            <th>Item(s)</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="d-flex align-items-center">
                                <img src="https://placehold.jp/150x150.png" class="me-3">
                                <span class="fw-bold">bunga</span>
                            </td>
                            <td>Rp. </td>
                            <td>1</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Summary and Shipping -->
        <div class="row mt-4">
            <!-- Order Summary -->
            <div class="col-md-4">
                <h5 class="fw-bold">Order Summary</h5>
                <div class="card p-3">
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>Rp. </span>
                    </div>
                    <div class="d-flex justify-content-between text-muted">
                        <small>3 items</small>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Shipping</span>
                        <span>Rp. </span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold">
                        <span>Total</span>
                        <span>Rp.</span>
                    </div>
                </div>
            </div>

            <!-- Shipping Info -->
            <div class="col-md-8">
                <h5 class="fw-bold">Shipping Info</h5>
                <div class="card p-3">
                    <span>Sent to:</span>
                    <p class="mt-2">Binus</p>
                </div>
            </div>
        </div>
    </div>
@endsection
