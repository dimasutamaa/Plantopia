@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="p-3">My Orders</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Orders</th>
                                    <th>Total</th>
                                    <th>Shipping</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>#1</td>
                                    <td>Rp</td>
                                    <td>Same Day</td>
                                    <td>tanggal oss</td>
                                    <td><a href="{{ route('orderDetails') }}">Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
