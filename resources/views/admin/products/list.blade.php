@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="my-2 container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="text-right col-sm-6">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">New Product</a>
                </div>
            </div>
        </div>
    </section>
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
@endsection
