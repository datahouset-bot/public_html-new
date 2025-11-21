@extends('entery.layoutproduct')

@section('title', 'Product List')

@section('content')

<div class="container-fluid mt-3">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">OFFICIAL PRODUCT PRICE</h2>

        <a href="{{ route('productdetail.create') }}" class="btn btn-primary">
            + Add Product
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm p-3">
        <table id="productTable" class="table table-bordered table-striped table-hover text-center w-100">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Use</th>
                    <th>MRP</th>
                    <th>Sale Price</th>
                    <th>Min Sale</th>
                    <th>Customer Price</th>
                    <th>Dealer Price</th>
                    <th>Description</th>
                    <th>User Type</th>
                    <th>Arc</th>
                    <th class="no-export">Edit</th>
                    <th class="no-export">Delete</th>

                </tr>
            </thead>

            <tbody>
                @foreach($product as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->productname }}</td>
                        <td>{{ $p->productcompany }}</td>
                        <td>{{ $p->productuse }}</td>
                        <td>{{ $p->MRP }}</td>
                        <td>{{ $p->saleprice }}</td>
                        <td>{{ $p->minsaleprice }}</td>
                        <td>{{ $p->customerprice }}</td>
                        <td>{{ $p->dealerprice }}</td>
                        <td>{{ $p->discription }}</td>
                        <td>{{ $p->usertype }}</td>
                        <td>{{ $p->arc }}</td>
                        <td class="no-export">
                            <a href="{{ route('productdetail.edit', $p->id) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>
                        </td>
                        <td class="no-export">
                            <form action="{{ route('productdetail.destroy', $p->id) }}" method="POST"
                                  class="d-inline" onsubmit="return confirm('Delete this product?')">

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection

@push('scripts')
<script>
   $(document).ready(function() {
    $('#productTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':not(.no-export)'  // hides all columns that have class "no-export"
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':not(.no-export)'
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':not(.no-export)'
                }
            }
        ],
        responsive: true,
        pageLength: 10
    });
});

</script>
@endpush
