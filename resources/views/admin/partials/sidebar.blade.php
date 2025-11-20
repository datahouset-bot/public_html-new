<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href={{url('/home')}}>
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    {{-- page section  --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsemaster" aria-expanded="false" aria-controls="collapsemaster">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Master
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsemaster" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                              Item Master
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href={{url('item')}}>Item</a>
                                    <a class="nav-link" href={{url('company')}}>Company</a>
                                    <a class="nav-link" href={{url('itemgroups')}}>Group</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Account Master
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('/account')}}">Customer</a>
                                    <a class="nav-link" href="404.html">Supplier</a>
                                    <a class="nav-link" href="500.html">Account Group</a>
                                </nav>
                            </div>
                        </nav>
                    </div>

                    {{-- master  section end  --}}

                    {{-- entery  section  start  --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages1">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Entery
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                {{ $compinfofooter->ct2 }} entery
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                     <a class="nav-link" href={{url('/quotation')}}>New Quotation &nbsp; </a>
                                    <a class="nav-link" href={{url('/amcform')}}>New {{ $compinfofooter->ct2 }}&nbsp; Entery</a>
                                    <a class="nav-link" href={{url('/amclist')}}>{{ $compinfofooter->ct2 }}&nbsp; Register </a>
                                    <a class="nav-link" href={{url('/amclist_end_month')}}>Month Wise End &nbsp;{{ $compinfofooter->ct2 }} </a>
                                    <a class="nav-link" href={{url('/amclist_due')}}>{{ $compinfofooter->ct2 }}&nbsp; Due list </a>
                                    <a class="nav-link" href={{url('/amclist_due_month')}}>Month WiseDue &nbsp;{{ $compinfofooter->ct2 }}  </a>
                                    <a class="nav-link" href={{url('/amc_inactive')}}>{{ $compinfofooter->ct2 }}&nbsp; Inactive </a>
                                    <a class="nav-link" href={{url('/amc_month_inactive')}}>Month Wise Inactive </a>


                                    <a class="nav-link" href={{url('/amclisttest')}}>amc list test   </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Services 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('/testshowform')}}">Test Form  </a>
                                    <a class="nav-link" href="#">Panding Service</a>
                                    <a class="nav-link" href="#">New Enquiery</a>
                                    <a class="nav-link" href="#">FolowUp</a>
                                    <a class="nav-link" href="#">Demo List </a>
                                </nav>
                            </div>
                              <a class="nav-link" href="{{url('/salaryslip')}}">salary</a>
                                    <a class="nav-link" href="{{url('salaryslip/create')}}">Add Employee</a>
<a class="nav-link" href="{{url('/productdetail')}}">productdetails</a>
                        </nav>
                    </div>
                  {{-- entery section end  --}}


                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsemkt" aria-expanded="false" aria-controls="collapsemkt">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    CaLL Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsemkt" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                          Markting Call
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href={{url('todolist')}}>To Do(Task)</a>
                                <a class="nav-link" href={{url('coldcall')}}>New Lead</a>
                                <a class="nav-link" href={{url('followup_list')}}>followup</a>
{{-- @if(auth()->check() && auth()->user()->email == 'datahouset@gmail.com') --}}
    <a class="nav-link" href="{{ url('coldcall_register') }}">All Lead</a>
{{-- @endif --}}

                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Account Master
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{url('/account')}}">Customer</a>
                                <a class="nav-link" href="404.html">Supplier</a>
                                <a class="nav-link" href="500.html">Account Group</a>
                            </nav>
                        </div>
                    </nav>
                </div>






                    {{-- <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div> --}}
                   
                   {{-- page section --------------------------- --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsesetting" aria-expanded="false" aria-controls="collapsesetting">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Setting
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsesetting" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Comapany Setting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> 
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href={{url('company_info_form')}}>Company Info </a>
                                    <a class="nav-link" href={{url('comp_pic_form')}}>Company Logo</a>
                                    <a class="nav-link" href={{url('comp_info_footer')}}>Other Details</a>
                                    
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#usersetting" aria-expanded="false" aria-controls="usersetting">
                                User Setting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="usersetting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('/roles') }}">Roles & Permission </a>
                                    <a class="nav-link" href="{{ url('/role') }}">Role </a>
                                    <a class="nav-link" href="{{ url('/permission') }}">Permission</a>
                                </nav>
                            </div>
                        </nav>
                    </div>

                </div>

                
            </div>
            
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{-- AMC Management Software  --}}
                {{ $compinfofooter->ct2 }}
            </div>
        </nav>
    </div>

   
     