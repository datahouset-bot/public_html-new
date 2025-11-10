<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ global_asset('/general_assets\css\form.css')}}">
@extends('layouts.full_blank')
{{-- @include('layouts.blank') --}}
@section('pagecontent')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="jquery/master.js"></script>
    <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
  <script>
  $(function () {
    // Set today's date in dd-mm-yy format
    let today = $.datepicker.formatDate('dd-mm-yy', new Date());
    $('#datepicker').val(today);
    
    // Initialize datepicker but disable interaction
    $("#datepicker").datepicker({
      dateFormat: "dd-mm-yy",
      beforeShow: function(input, inst) {
        return false; // prevent calendar from opening
      }
    });
  });
</script>



    
    
{{-- <script>
  $(document).ready(function () {
    let table = new DataTable('#remindtable');
   
   });
</script> --}}


        

 <div class="container">

  @if(session('message'))
    <div class="alert alert-primary my-3">
        {{ session('message') }}
    </div>
@endif

      <div class="card my-3" style="width: 100%;">
        <h5 class="card-title">    Add Support Ticket</h5>
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        
  <form action="{{url('/store_todo_bycustomer')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2 my-2">
              <label for="">Date</label>
              <input type="text" class="form-control" id="datepicker" name="reminder_date_given"   value=""  readonly> 
              <span class="text-danger"> 
                @error('reminder_date_given')
                {{$message}}
                @enderror
              </span>  
            </div>

              
              <input type="hidden" class="form-control" name="reminder_title" Value="Ticket_By_Customer">
            {{-- <div class="col-md-2 my-2">
  <label for="reminder_title">Title</label>
  <select class="form-control select2" name="reminder_title" id="reminder_title">
    <option value="">Select Title</option>
    <option>Speed_Plus_Support</option>
    <option>One_Plus_Support</option>
    <option>RoomG_Support</option>
    <option>Tally_Support</option>
    <option>Busy_Support</option>
    <option>Marg_Support</option>
    <option>Cloud_Support</option>
    <option>Payment</option>
    <option>Whatsapp_Support</option>
    <option>Genral_Support</option>
    <option>Other_Reminder</option>
  </select>
  <span class="text-danger"> 
    @error('reminder_title')
    {{$message}}
    @enderror
  </span>
</div> --}}

            <div class="col-md-3 my-2">
              <label for="">Shop Name</label>
              <input type="text" class="form-control" name="reminder_name" placeholder="Name" autocomplete="off"> 
              <span class="text-danger"> 
                @error('reminder_name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="col-md-3 my-2">
              <label for="">Mobile</label>
              <input type="text" class="form-control" name="reminder_mobile" placeholder="Mobile No " autocomplete="off"> 
              <span class="text-danger"> 
                @error('reminder_mobile')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="col-md-2 my-2">
              <label for="">City</label>
              <input type="text" class="form-control" name="reminder_city" placeholder="City" autocomplete="off"> 
            </div>
          </div>
          <div class="row my-3 my-2">
            <div class="col-md-8">
              <label for="">Problem Discription</label>
              <input type="text" class="form-control" name="reminder_disc" placeholder="Discription "autocomplete="off">
              <span class="text-danger"> 
                @error('reminder_disc')
                {{$message}}
                @enderror
              </span>  
            </div>
            {{-- <div class="col-md-2">
              <label for="">Discription</label>
              <input type="text" class="form-control" name="reminder_af2" readonly value =  "{{ Auth::user()->name }}" >
              <span class="text-danger"> 
                @error('reminder_disc')
                {{$message}}
                @enderror
              </span>  
            </div> --}}
            <div class="col-md-2 my-2">
              <button type="submit"class="btn btn-primary btn-block">Save</button>
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