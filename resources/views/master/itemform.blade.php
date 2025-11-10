@php
include(public_path('cdn/cdn.blade.php'));
@endphp

@extends('layouts.blank')
{{-- @include('layouts.blank') --}}
@section('pagecontent')
<div class="container ">

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Item</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('/saveitem')}}" method="POST">
                                            @csrf
                                            

                                            <div class="row mb-3">
                                                <div class="col-md-8">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="item_name" type="text" name="item_name" value="{{ old('item_name') }}" />
                                                      <span class="text-danger"> 
                                                        @error('item_name')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="item_name">Item/Product Name</label>
                                                       
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select  name ="company" id ="company"class="mycompany form-select" aria-label="Default select example">
                                                        <option  value ="" selected disabled>Select Company</option>
                                                      @foreach ($companydata as $record )
                                                        
                                                    
                                                        <option value={{$record['comp_name']}}>{{$record['comp_name']}} </option>
                                                        @endforeach
                                                      </select>
                                                      <span class="text-danger"> 
                                                        @error('company')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">

                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select  name ="group" id ="myitemgroup"class="myitemgroup form-select" aria-label="Default select example">
                                                            <option  value ="" selected disabled>Select group</option>
                                                          @foreach ($itemgroupdata as $record )
                                                            
                                                        
                                                            <option value={{$record['item_group']}}>{{$record['item_group']}} </option>
                                                            @endforeach
                                                          </select>
                                                          <span class="text-danger"> 
                                                            @error('group')
                                                            {{$message}}
                                                                
                                                            @enderror
                                                          </span>
        







                                                    {{-- <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="group" type="text" name="group" value="{{ old('group') }}" />
                                                      <span class="text-danger"> 
                                                        @error('group')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="group">Group</label>
                                                       
                                                    </div> --}}
                                                </div>

                                                </div>    



                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="mrp" type="text" name="mrp" value="{{ old('mrp') }}" />
                                                      <span class="text-danger"> 
                                                        @error('mrp')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="mrp">MRP</label>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="sale_rate" type="text" name="sale_rate" value="{{ old('sale_rate') }}" />
                                                      <span class="text-danger"> 
                                                        @error('sale_rate')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="sale_rate">Sale Rate</label>
                                                       
                                                    </div>

                                                </div>  
                                                <div class="col-md-4 mt-2">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                         
                                                          <select name="unit" Id ="unit"class="form-select" aria-label="Default select example">
                                                            <option selected disabled>Select Unit </option>
                                                            
                                                            <option value="Pcs">Pcs</option>
                                                            <option value="Qty">Qty</option>       
                                                            <option value="Nos">Nos </option>
                                                            <option value="KG">KG </option>  
                                                            <option value="SQFT">SQFT </option> 
                                                            <option value="MTR">MTR </option>      
                                                            <option value="Bag">Bag </option>    
                                                            
                                                          </select>
                                                            <label for="unit">Unit  </label>
                                                           
                                                        </div>
                                                        <span class="text-danger"> 
                                                          @error('unit')
                                                          {{$message}}
                                                              
                                                          @enderror
                                                        </span>
          
                                                    </div>    
        
        








                                                    {{-- <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="unit" type="text" name="unit" value="{{ old('unit') }}" />
                                                      <span class="text-danger"> 
                                                        @error('unit')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="unit">Unit</label>
                                                       
                                                    </div> --}}

                                                </div>    
                                                
                                                 

                                                
                                                
                                                        
                                            </div>
                                                




                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit"class="btn btn-primary btn-block">Save</button>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a  class= "btn btn-dark  "href={{url('item')}}>Back</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
   




    <div class="card my-3">
        <div class="card-header">
         Item List 
        </div>
       <div class="row ">
         
        <div class="card-body">
           
    </div>
</div>
<script>
    $('.myitemgroup').chosen();
    $('.mycompany').chosen();
</script>
  
@endsection