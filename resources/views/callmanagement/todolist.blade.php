@extends('layouts.blank')
{{-- @include('layouts.blank') --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

           
    }).datepicker('setDate','0');
  } );
  </script>
    
    
<script>
  $(document).ready(function () {
    let table = new DataTable('#remindtable', {
        "scrollX": true,
        "scrollCollapse": true,
        "paging": false  
    });
   
   });
</script>

<style>
  .table-scrollable {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* Enables momentum scrolling in iOS Safari */
  }

  .highlight {
  background-color: lightyellow;
}

</style>

<div class="container">
  
  @if(session('message'))
    <div class="alert alert-primary my-3">
        {{ session('message') }}
    </div>
  @endif

  <div class="card my-3" style="width: 100%;">
    <h5 class="card-title">To do / Reminder / Task </h5>
    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
    <form action="{{url('/todolist')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2 my-2">
              <label for="">Date</label>
              <input type="text" class="form-control" id="datepicker" name="reminder_date_given" placeholder="Reminder Date "  value=""> 
              <span class="text-danger"> 
                @error('reminder_date_given')
                {{$message}}
                @enderror
              </span>  
            </div>
            {{-- <div class="col-md-2 my-2">
              <label for="">Title</label>
              <input type="text" class="form-control" name="reminder_title" placeholder="Title">
              <span class="text-danger"> 
                @error('reminder_title')
                {{$message}}
                @enderror
              </span>
            </div> --}}
            <div class="col-md-2 my-2">
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
</div>

            <div class="col-md-3 my-2">
              <label for="">Name</label>
              <input type="text" class="form-control" name="reminder_name" placeholder="Name"> 
              <span class="text-danger"> 
                @error('reminder_name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="col-md-3 my-2">
              <label for="">Mobile</label>
              <input type="text" class="form-control" name="reminder_mobile" placeholder="Mobile No "> 
              <span class="text-danger"> 
                @error('reminder_mobile')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="col-md-2 my-2">
              <label for="">City</label>
              <input type="text" class="form-control" name="reminder_city" placeholder="City"> 
            </div>
          </div>
          <div class="row my-3 my-2">
            <div class="col-md-8">
              <label for="">Discription</label>
              <input type="text" class="form-control" name="reminder_disc" placeholder="Discription ">
              <span class="text-danger"> 
                @error('reminder_disc')
                {{$message}}
                @enderror
              </span>  
            </div>
            <div class="col-md-2">
              <label for="">Discription</label>
              <input type="text" class="form-control" name="reminder_af2" readonly value =  "{{ Auth::user()->name }}" >
              <span class="text-danger"> 
                @error('reminder_disc')
                {{$message}}
                @enderror
              </span>  
            </div>
            <div class="col-md-2 my-2">
              <button type="submit"class="btn btn-primary btn-block">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row" class="text-center">
    <div class="col-md-12 text-center">
      <a href="{{url('/todolist')}}" class ="btn btn-danger my-2 mx-2">  Pending Task All </a>
      <select class="form-control select2"  id="Report_title">
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
    <option>TICKET_BY_CUSTOMER</option>
  </select>
      <a href="{{url('/tododonelist')}}" class ="btn btn-success my-2 mx-2">  Completed To-Dos </a>
      <a href="{{url('/todolist_dt')}}" class ="btn btn-danger my-2 mx-2">  Data Table   </a>
      <a href="{{url('todo_import_show')}}" class ="btn btn-danger my-2 mx-2">  Import  </a>
      <a href="{{url('/todolist')}}" class ="btn btn-danger my-2 mx-2">  Mail  </a>
    </div>
  </div>

  {{-- data table start  --}}
  <div class="card-body">
    <div class="table-scrollable">
      <table class="table table-striped" id="remindtable">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Executive</th>
            <th scope="col">Date</th>
            <th scope="col">Title</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">City</th>
            <th scope="col">Discription</th>
            <th scope="col">Done</th>
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
              <th scope="row">{{$r1=$r1+1}}</th>
              <td>{{$record['reminder_af2']}}</td>
              <td scope="col">{{ \Carbon\Carbon::parse($record['reminder_date'])->format('d-m-y') }}</td>
              <td>{{$record['reminder_title']}}</td>
              <td>{{$record['reminder_name']}}</td>
              <td>{{$record['reminder_mobile']}}</td>
              <td>{{$record['reminder_city']}}</td>
              <td>{{$record['reminder_disc']}}</td>
              <form action="{{url('/tododone')}}" method="POST">
                @method('PUT')
                @csrf      
                <td>
                  <div class="form-check">
                    <input type="hidden" name ='id' value="{{$record['id']}}" >
                    <input class="form-check-input" type="checkbox" name ="reminder_af1" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault"></label>
                  </div>
                </td>
                <td><button type="submit"class="btn btn-primary btn-sm">Ok</button></td>
              </form>

              <td><a href="{{('showtodo/'.$record['id']) }}" class="btn  btn-sm"><i class="fa fa-eye" style="font-size:20px;color:DarkGreen"></i></a></td>
              <td><a href="{{('deletetodo/'.$record['id']) }}" class="btn  btn-sm"><i class="fa fa-trash" style="font-size:20px;color:OrangeRed"></i></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    // Attach input event listener to all input fields
    $('input[type="text"]').on('input', function() {
      // Remove any existing highlighting
      $('input[type="text"]').removeClass('highlight');

      // Highlight the current input field with light yellow color
      $(this).addClass('highlight');
    });
  });
</script>


<!-- Add in <head> -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Add before </body> -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Select Title",
      allowClear: true
    });
  });
</script>

<script>
  $(document).ready(function () {
    // Initialize Select2
    $('#Report_title').select2({
      placeholder: "Select Title",
      allowClear: true
    });

    // Redirect on selection
    $('#Report_title').on('change', function () {
      let selectedValue = $(this).val();
      if (selectedValue) {
        // Encode the value to pass safely in the URL
        let encodedValue = encodeURIComponent(selectedValue);
        window.location.href = `/todolist_report/${encodedValue}`;
      }
    });
  });
</script>
@endsection
