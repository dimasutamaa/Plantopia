@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4 fw-bold">Your shopping cart</h2>
        @if (count($cartItems) == 0)
            <div class="py-5 text-center">
                <h4>Cart is empty</h4>
                <a href="{{ route('shop') }}"
                    class="fs-6 link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                    Browse all products
                </a>
            </div>
        @else
            <div class="row">
                <!-- Tabel Produk -->
                <x-cart-table :cartItems="$cartItems" />

                <!-- Rincian Pembayaran -->
                <div class="container mt-5">
                    <!-- Shipping Type -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <span>Shipping type</span>
                        <select id="shipping-type" class="w-auto form-select ms-3" aria-label="Shipping type">
                            <option value="" selected disabled>Shipping method</option>
                            @foreach ($shippings as $shipping)
                                <option value="{{ $shipping->id }}" data-price="{{ $shipping->price }}">
                                    {{ $shipping->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Shipping Cost -->
                    <div class="mb-3 d-flex justify-content-between">
                        <span>Shipping cost</span>
                        <span id="shipping-price" class="fw-bold">Rp. 0,00</span>
                    </div>

                    <!-- Payment Method -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <span>Payment method</span>
                        <select class="w-auto form-select ms-3" aria-label="Payment method">
                            <option selected>Bank Transfer</option>
                            <option value="1">Credit Card</option>
                            <option value="2">Cash on Delivery</option>
                        </select>
                    </div>

                    <!-- Horizontal Line -->
                    <hr class="border opacity-100 border-dark" />

                    <!-- Total Cost -->
                    <div class="py-3 d-flex justify-content-between fw-bold">
                        <span>Total Cost</span>
                        <span id="total-cost">{{ 'Rp. ' . number_format($cartTotal, 2, ',', '.') }}</span>
                    </div>

                    <!-- Pay Now Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="px-4 py-2 btn btn-success">Pay Now</button>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('customJs')
    <script>
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "Fail!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>

    <script>
        $(document).ready(function() {
            const cartTotal = {{ $cartTotal ?? 0 }};

            $('#shipping-type').on('change', function() {
                const selectedOption = $(this).find(':selected');
                const shippingPrice = parseFloat(selectedOption.data('price') || 0);

                $('#shipping-price').text(`Rp. ${shippingPrice.toLocaleString('id-ID', { minimumFractionDigits: 2 })}`);

                const totalCost = cartTotal + shippingPrice;
                $('#total-cost').text(`Rp. ${totalCost.toLocaleString('id-ID', { minimumFractionDigits: 2 })}`);
            });
        });
    </script>
@endsection
