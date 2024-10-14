@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3">
            <h5>Filter Produk</h5>
            <select id="productFilter" class="form-select" aria-label="Filter by product type">
                <option value="all">Semua Produk</option>
                <option value="baju">T-shirt</option>
                <option value="celana">Jeans</option>
                <option value="hoodie">Hoodie</option>
                <option value="jaket">Jacket</option>
                <option value="aksesoris">Accessories</option>
            </select>
        </div>
    </div>
@endsection
