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
        <h5 class="card-title">    Add New Lead</h5>
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        
        <form action="{{url('/storelead_bycustomer')}}"   method="POST">
          {{-- @method('PUT') --}}
          @csrf
        <div class="card-body">
          <div class="form-group">
        <div class="row">

            <div class="col-md-2 my-2">
              <label for="lead_title">Title</label>
              <input type="text" class="form-control" name="lead_title" value="New Call" readonly>
              <span class="text-danger"> 
                @error('lead_title')
                {{$message}}
                    
                @enderror
              </span>
            </div>
            <div class="col-md-3 my-2">
              <label for="lead_name">Name</label>
              <input type="text" class="form-control" name="lead_name" placeholder="Name" value ="{{ old('lead_name') }}">
              <span class="text-danger"> 
                @error('lead_name')
                {{$message}}
                    
                @enderror
              </span> 
            </div>
            
            <div class="col-md-3 my-2">
              <label for="">Mobile</label>
              <input type="text" class="form-control" name="lead_mobile" placeholder="Mobile No " value ="{{ old('lead_mobile') }}" required>
              <span class="text-danger"> 
                @error('lead_mobile')
                {{$message}}
                    
                @enderror
              </span>  
            </div>
            <div class="col-md-2 my-2">
              <label for="">City</label>
              <input type="text" class="form-control" name="lead_city" placeholder="City" value ="{{ old('lead_city') }}"> 
              <span class="text-danger"> 
                @error('lead_city')
                {{$message}}
                    
                @enderror
              </span> 
            </div>
         </div>
         <div class="row my-2 ">
          <div class="col-md-2 my-2">
            <label for="">Product</label>
            <input type="text" class="form-control" name="lead_product" placeholder="Product "value ="{{ old('lead_product') }}"> 
          
            <span class="text-danger"> 
              @error('lead_product')
              {{$message}}
                  
              @enderror
            </span>  
          </div>
          <div class="col-md-6 my-2">
            <label for="">Discription</label>
            <input type="text" class="form-control" name="lead_disc" placeholder="Discription "value ="{{ old('lead_disc') }}"> 
          
            <span class="text-danger"> 
              @error('lead_disc')
              {{$message}}
                  
              @enderror
            </span>  
          </div>
          <div class="col-md-2 my-2">
            <label for="">Source Name</label>
            <input type="text" class="form-control" name="lead_executive" readonly value =  "Youtube" > 
          
            <span class="text-danger"> 
              @error('lead_executive')
              {{$message}}
                  
              @enderror
            </span>  
          </div>
          <div class="col-md-2 my-1 ">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
          </div>
         </div>
        </form>


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