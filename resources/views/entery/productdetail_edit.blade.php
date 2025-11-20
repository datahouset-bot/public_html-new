@extends('entery.layoutproduct')

@section('title', 'Edit Product')

@section('content')

<div class="container mt-4">
    <h3 class="mb-3">Edit Product</h3>

    <form action="{{ route('productdetail.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-md-4 mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="productname" class="form-control"
                       value="{{ $product->productname }}" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Company</label>
                <input type="text" name="productcompany" class="form-control"
                       value="{{ $product->productcompany }}" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Use</label>
                <input type="text" name="productuse" class="form-control"
                       value="{{ $product->productuse }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">MRP</label>
                <input type="number" name="MRP" class="form-control"
                       value="{{ $product->MRP }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Sale Price</label>
                <input type="number" name="saleprice" class="form-control"
                       value="{{ $product->saleprice }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Min Sale Price</label>
                <input type="number" name="minsaleprice" class="form-control"
                       value="{{ $product->minsaleprice }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Customer Price</label>
                <input type="number" name="customerprice" class="form-control"
                       value="{{ $product->customerprice }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Dealer Price</label>
                <input type="number" name="dealerprice" class="form-control"
                       value="{{ $product->dealerprice }}">
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Description</label>
                <textarea name="discription" class="form-control" rows="3">
                    {{ $product->discription }}
                </textarea>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">User Type</label>
                <input type="text" name="usertype" class="form-control"
                       value="{{ $product->usertype }}">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Arc</label>
                <input type="text" name="arc" class="form-control"
                       value="{{ $product->arc }}">
            </div>

        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('productdetail.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
</div>

@endsection
