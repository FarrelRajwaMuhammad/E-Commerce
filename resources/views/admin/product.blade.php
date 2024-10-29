@extends('layouts.app')

@section('content')
<section id="categories">
    <div class="container">
        <div class="menu">
            <div class="row row-cols-2">
                <!-- Left cards -->
                <div class="col-md-8">
                    <div class="row g-3">
                        <!-- Smaller cards -->
                        @foreach ($products as $item)
                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->product_name }}"
                                        data-bs-toggle="modal" data-bs-target="#modal-{{ $item->id }}"
                                        class="img-fluid" style="height: 200px">
                                    <div class="card-body text-center p-2">
                                        <h5 class="card-title mb-0">{{ $item->product_name }}</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for each product -->
                            <div class="modal fade" id="modal-{{ $item->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalLabel-{{ $item->id }}">{{ $item->product_name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <p class="text-center">Add Ons</p>
                                                <div class="row">
                                                    @foreach ($addons as $need)
                                                        @if ($need->categories->id == $item->categories_id)
                                                            <div class="col">
                                                                <input type="radio" class="btn-check" name="options-{{ $item->id }}" id="option-{{ $need->id }}"
                                                                    autocomplete="off">
                                                                <label class="btn" for="option-{{ $need->id }}">{{ $need->name_addOn }}</label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @if (Route::is('admin.product'))
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h1 class="text-center">Add Product</h1>

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <hr>
                                <form action="{{ route('admin.product') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="categories_id" class="form-label">Pilih Kategori</label>
                                        <select class="form-select" name="categories_id" required>
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->nameCategory }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Nama Product</label>
                                        <input type="text" class="form-control" id="Product-name" name="product_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" class="form-control" id="Product-Price" name="price">
                                    </div>
                                    <div class="mb-3">
                                        <label for="stock" class="form-label">Stock</label>
                                        <input type="number" class="form-control" id="Product-stock" name="stock">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Input Image</label>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
