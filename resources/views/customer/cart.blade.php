@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="fw-bold mb-4">Your shopping cart</h2>
        <div class="row">
            <!-- Tabel Produk -->
            <div class="col-12">
                <table class="table" style="border-collapse: collapse; border: none;">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- Produk -->
                            <td class="d-flex align-items-center">
                                <img src="https://placehold.jp/150x150.png" class="img-thumbnail me-3" style=""
                                    alt="Product Image">
                                <div>
                                    <strong>Natural Plant</strong><br>
                                    <span class="text-muted">Plant Categories</span><br>
                                    <a href="#" class="text-decoration-none text-danger">Remove Item</a>
                                </div>
                            </td>
                            <!-- Harga -->
                            <td>Rp. 89.000,00</td>
                            <!-- Jumlah -->
                            <td>
                                <select class="form-select me-2" id="floatingSelect" aria-label="Floating label select example" style="width:60px">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </td>
                            <!-- Total -->
                            <td>Rp. 178.000,00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <span class="fw-bold">1 Items</span>
                </div>
            </div>

            <!-- Rincian Pembayaran -->
            <div class="container mt-5">
                <!-- Shipping Type -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span>Shipping type</span>
                    <select class="form-select w-auto ms-3" aria-label="Shipping type">
                        <option selected>Sameday</option>
                        <option value="1">Next Day</option>
                        <option value="2">Standard</option>
                    </select>
                </div>

                <!-- Shipping Cost -->
                <div class="d-flex justify-content-between mb-3">
                    <span>Shipping cost</span>
                    <span class="fw-bold">Rp. 15.000,00</span>
                </div>

                <!-- Payment Method -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span>Payment method</span>
                    <select class="form-select w-auto ms-3" aria-label="Payment method">
                        <option selected>Bank Transfer</option>
                        <option value="1">Credit Card</option>
                        <option value="2">Cash on Delivery</option>
                    </select>
                </div>

                <!-- Horizontal Line -->
                <hr class="border border-dark opacity-100"/>

                <!-- Total Cost -->
                <div class="d-flex justify-content-between fw-bold py-3">
                    <span>Total Cost</span>
                    <span>Rp. 193.000,00</span>
                </div>

                <!-- Pay Now Button -->
                <div class="d-flex justify-content-end">
                    <button class="btn btn-success px-4 py-2">Pay Now</button>
                </div>
            </div>
        @endsection
