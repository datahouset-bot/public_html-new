<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">{{ $compinfofooter->ct2 }} Dashboard</h1>
            
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                User : {{$login_name}}&nbsp;  {{ $compinfofooter->ct2 }} Dashboard Date {{ now()->format('d-m-y') }} Time {{ now()->format('H:i:s') }}
                </li>
            </ol>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-database fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Total Records: {{ $amcCount }}</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/amclist') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-exclamation-triangle fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Total Due: {{ $dueAmcCount }}</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/amclist_due') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-tasks fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Pending Task: {{ $pendingTask }}</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/todolist') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-calendar-check fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Today's Follow Up: {{ $todayFollowup }}</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/followup_list') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-user-plus fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Add New Lead</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/coldcall') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>    
               <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-chart-bar fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Month Wise AMC</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/amclist_end_month') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>    
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-clock fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Month Wise Inactive</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/amc_month_inactive') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-calendar fa-2x me-3"></i>
                            <div>
                                <div style="font-size: large; font-weight: bold;">Month Wise Due</div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('/amclist_due_month') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
</div>
