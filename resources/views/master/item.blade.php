<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@extends('layouts.blank')
{{-- @include('layouts.blank') --}}
@section('pagecontent')
<link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="jquery/master.js"></script>
    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script>
      <script>
  $(document).ready(function () {
    let table = new DataTable('#remindtable');
  });
</script>
<div class="container ">

    <div class="card my-3">
        <div class="card-header">
         Item List 
        </div>
       <div class="row ">
        <div class="col-md-12 text-center"><a href={{url('/itemform')}} class="btn btn-primary">Add New Item  </a>
          <button class="btn btn-info mx-2">Export</button></div></div>
         
        <div class="card-body">
            <table class="table table-striped"id="remindtable">
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Group</th>
                    <th scope="col">MRP</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Unit</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>

                  @php
                    $r1=0;
                  @endphp
                  @foreach ($data as $record)
                    
                  <tr>
                    {{-- <th scope="row">{{$record['id']}}</th> --}}
                    <th scope="row">{{$r1=$r1+1}}</th>
                    <td>{{$record['item_name']}}</td>
                    <td>{{$record['company']}}</td>
                    <td>{{$record['group']}}</td>
                    <td>{{$record['mrp']}}</td>
                    <td>{{$record['sale_rate']}}</td>
                    <td>{{$record['unit']}}</td>
                    <td><a href="{{('itemformview/'.$record['id']) }}"  class="btn btn-info btn-sm">View</a></td>
                    <td><a href="{{('showedititem/'.$record['id']) }}"  class="btn btn-primary btn-sm">Edit</a></td>
                    <td><a href="{{('deleteitem/'.$record['id']) }}"  class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>

        </div>
    </div>
</div>

@endsection