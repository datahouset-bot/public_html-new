
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Account</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('/create')}}" method="POST">
                                            @csrf
                                            

                                            <div class="row mb-3">
                                                <div class="col-md-8">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="account_name" type="text" name="account_name" value="{{ old('account_name') }}" />
                                                      <span class="text-danger"> 
                                                        @error('account_name')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="account_name">Account Name </label>
                                                       
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-2">
                                                  
                                                  
                                                  <div class="form-floating mb-3 mb-md-0">
                                                       
                                                         
                                                    <select name="account_group" Id ="account_group"class="form-select" aria-label="Default select example">
                                                      <option selected disabled>Select</option>
                                                      
                                                      <option value="Customer">Customer</option>
                                                      <option value="Field Staff">Field Staff</option>       
                                                      <option value="Expense">Expense</option>
                                                      <option value="Income">Income</option>
                                                      <option value="Supplier">Supplier</option>
                                                      <option value="Other">Other</option>
                                                      <option value="MargcloudUser">MargcloudUser</option>
                                                    <option value="TallycloudUser">TallycloudUser</option>
                                                    <option value="BusycloudUser">BusycloudUser</option>
                                                    <option value="SpeedPluscloudUser">SpeedPluscloudUser</option>
                                                    <option value="OthercloudUser">OthercloudUser</option>
                                                    <option value="Distributer">Distributer</option>
                                                    <option value="TallyCustomer">TallyCustomer</option>
                                                    <option value="BusyCustomer">BusyCustomer</option>
                                                    <option value="MargCustomer">MargCustomer</option>                    
                                                    <option value="SpeedPlusCustomer">SpeedPlusCustomer</option>                    
                                                    <option value="OnePlusCustomer">OnePlusCustomer</option>                    
                                                    <option value="RoomgCustomer">RoomgCustomer</option>
                                                    <option value="WhatsappCustomer">WhatsappCustomer</option>
                                                    
                                                    

                                                      
                                                    </select>
                                                      <label for="account_group">Account Group  </label>
                                                     
                                                  <span class="text-danger"> 
                                                    @error('account_group')
                                                    {{$message}}
                                                        
                                                    @enderror
                                                  </span>
                                                  
                                                  {{-- <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="account_group" type="text" name="account_group" value="{{ old('account_group') }}" />
                                                      <span class="text-danger"> 
                                                        @error('account_group')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="account_group">Account Group</label>
                                                        --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="op_balnce" type="text" name="op_balnce" value="{{ old('op_balnce') }}" />
                                                      <span class="text-danger"> 
                                                        @error('op_balnce')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="op_balnce">Opning Balance </label>
                                                       
                                                    </div>

                                                </div>    



                                                <div class="col-md-4 mt-2">

                                                  
                                                    <div class="form-floating mb-3 mb-md-0">
                                                       
                                                         
                                                        <select name="balnce_type" Id ="balnce_type"class="form-select" aria-label="Default select example">
                                                          <option selected disabled>Select</option>
                                                          
                                                          <option value="Dr">Dr</option>
                                                          <option value="Cr">Cr</option>       
                                                          
                                                        </select>
                                                          <label for="balnce_type">Balance_type  </label>
                                                         
                                                      <span class="text-danger"> 
                                                        @error('balnce_type')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
        
                                                      
                                                      
                                                      {{-- <input class="form-control" id="balnce_type" type="text" name="balnce_type" value="{{ old('balnce_type') }}" />
                                                      <span class="text-danger"> 
                                                        @error('balnce_type')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="balnce_type">Balance_Type</label> --}}
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="address" type="text" name="address" value="{{ old('address') }}" />
                                                      <span class="text-danger"> 
                                                        @error('address')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="address">Address</label>
                                                       
                                                    </div>

                                                </div>  
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="city" type="text" name="city" value="{{ old('city') }}" />
                                                      <span class="text-danger"> 
                                                        @error('city')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="city">City</label>
                                                       
                                                    </div>

                                                </div>    
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="phone" type="text" name="phone" value="{{ old('phone') }}" />
                                                      <span class="text-danger"> 
                                                        @error('phone')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="phone">Phone</label>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="mobile" type="text" name="mobile" value="{{ old('mobile') }}" />
                                                      <span class="text-danger"> 
                                                        @error('mobile')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="mobile">Mobile</label>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="emial" type="text" name="email" value="{{ old('email') }}" />
                                                      <span class="text-danger"> 
                                                        @error('email')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="email">Email</label>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="person_name" type="text" name="person_name" value="{{ old('person_name') }}" />
                                                      <span class="text-danger"> 
                                                        @error('person_name')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="person_name">Contact Person Name </label>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gst_no" type="text" name="gst_no" value="{{ old('gst_no') }}" />
                                                      <span class="text-danger"> 
                                                        @error('gst_no')
                                                        {{$message}}
                                                            
                                                        @enderror
                                                      </span>
                                                        <label for="gst_no">GST No </label>
                                                       
                                                    </div>

                                                </div>
                                                <div class="col-md-4 mt-2">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                      <input class="form-control" id="state" type="text" name="state" value="{{ old('state') }}" />
                                                    <span class="text-danger"> 
                                                      @error('state')
                                                      {{$message}}
                                                          
                                                      @enderror
                                                    </span>
                                                      <label for="state">State </label>
                                                     
                                                  </div>

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
                                        <div class="small"><a  class= "btn btn-dark  "href={{ url()->previous() }}>Back</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
   




    
</div>

@endsection