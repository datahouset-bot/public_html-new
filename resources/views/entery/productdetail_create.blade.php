@extends('entery.layoutproduct')

@section('title', 'Add Product')

@section('content')
<div class="container mt-4">

    <h3 class="mb-4">Add New Product</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Please fix the errors below:
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('productdetail.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="productname" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Product company</label>
                <input type="text" name="productcompany" class="form-control" required>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Product Use</label>
                <input type="text" name="productuse" class="form-control">
            </div>
            
            <div class="col-md-2 mb-3">
                <label class="form-label">MRP</label>
                <input type="text" name="MRP" class="form-control">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Sale Price</label>
                <input type="number" name="saleprice" class="form-control">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Min Sale Price</label>
                <input type="number" name="minsaleprice" class="form-control">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Customer Price</label>
                <input type="number" name="customerprice" class="form-control">
            </div>

             <div class="col-md-3 mb-3">
                <label class="form-label">Dealer Price</label>
                <input type="number" name="dealerprice" class="form-control">
            </div>

            <!-- Extra fields t1 - t6 -->
            <div class="col-md-2 mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="discription" class="form-control">
            </div>



            <div class="col-md-2 mb-3">
                <label class="form-label">User Type</label>
                <input type="text" name="usertype" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Arc</label>
                <input type="text" name="arc" class="form-control">
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('productdetail.index') }}" class="btn btn-secondary">
                Back
            </a>

            <button type="submit" class="btn btn-success">
                Save Product
            </button>
        </div>

    </form>

</div>
@endsection
