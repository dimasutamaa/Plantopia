@extends('admin.layouts.app')

@section('content')
    <div class="my-2 container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h2>Products</h2>
            </div>
            <div class="text-end col-sm-6">
                <a href="{{ route('product.create') }}" class="btn btn-primary">New Product</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <div class="input-group" style="width: 250px;">
                        <form action="">
                            <input type="text" name="table_search" class="form-control" placeholder="Search">
                        </form>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-0 card-body table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col"></th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td class="text-center"><img src="{{ asset($product->product_image) }}"
                                        class="img-thumbnail" width="150px">
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</td>
                                <td>
                                    <form onsubmit="return confirm('Are you sure?');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success">
                                            Edit
                                        </a>
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <div class="text-center alert alert-danger">
                                        Data Products not yet available.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>
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
@endsection