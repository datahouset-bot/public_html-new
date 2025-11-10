<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ global_asset('/general_assets\css\form.css')}}">
@extends('layouts.full_blank')
{{-- @include('layouts.blank') --}}
@section('pagecontent')
<link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="jquery/master.js"></script>
    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat:"dd-mm-yy",
      changeMonth:true,
      changeYear:true,

           
    });
  } );
  </script>
    
    
<script>
  $(document).ready(function () {
    let table = new DataTable('#remindtable');
   
   });
</script>


        

 <div class="container">

  @if(session('message'))
    <div class="alert alert-primary my-3">
        {{ session('message') }}
    </div>
@endif

      <div class="card my-3" style="width: 100%;">
        <h5 class="card-title">Thanks for showing interest. We will contact you shortly.</h5>

        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
         <div class="card-body">
          <div class="form-group">
        <div class="row">
<table class="table table-striped">
  <th><tr><td></td><td></td></tr></th>
   <tbody>
    <tr><td><h1>Data House Tecnology</h1> </td></tr>
    <tr><td><h5></h5>Shop No 8 3rd Floor Good Luck Apartment Jabalpur  </td>
    </tr>
    <tr><td><h5></h5>Mo-7999663696 ,8871702803,8305741149 </td></tr>
     <tr><td><h5></h5>Email- datahouset@gamil.com</td></tr>   
     <tr><td><a href="https://www.youtube.com/@BillingSoftwaredatahouse" class="btn btn-danger">Youtube Chanal </a></td></tr>
    


   </tbody>
</table>


          </div>


        </div>
      </div>
    </div>

        </div>
    </div>
</div>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
      
              <script src="{{ global_asset('/general_assets\js\form.js')}}"></script>

@endsection