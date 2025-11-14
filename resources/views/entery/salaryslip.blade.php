<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<title>Employee Salary Slip Generator</title>

<style>
  body { font-family: Arial, sans-serif; background: #f5f5f5; }
  .container { max-width:80%; margin-top: 18px; background: #ffffff; padding: 20px; border: 1px solid #333; }
  h2, h3 { text-align: center; margin: 6px 0; background: gray; padding: 12px; color: #fff;  }
  table { width: 100%; border-collapse: collapse; margin-top: 10px; }
  th, td { border: 2px solid #333; padding: 6px; font-size: 14px; }
  th { background: #333; color: #fff; }
input, select, textarea { 
margin: 2px 0; border: 10px solid #ccc;padding: 30px;size: 12cm:width: 100%;font-size: 22px;
}
input::placeholder { font-size: 18px; color: black; }
textarea::placeholder { font-size: 18px; color: black; }
.section-title { text-align: center;font-size:26px; background: grey; padding:8px; font-weight:bolder; margin-top: 20px; }
  .btn:hover { background: #0056b3; }
  label { font-weight: bold; font-size: 22px; margin-top: 10px; display: block; }
   { font-size: 18px; }
</style>

</head>
<body>

<div class="container">

  <h2>DATA HOUSE COMPANY
    <h3>Monthly Salary Slip</h3>
  </h2>
  
<form id="salaryform">
  @csrf
  {{-- <button type="button" id="insertEmployee" class="btn btn-info float-end"> --}}
  

  <div class="section-title">Employee Details</div>

  <select id="employeeSelect" class="form-select">
      <option style="font-size: 22px" value="">-- Select Employee --</option>
     @foreach ($employees as $emp)
    <option style="font-size: 18px" value="{{ $emp->id }}">{{ $emp->Emp_name }} ({{ $emp->designation }})</option>
@endforeach
</select>
<label for="userid">User ID</label> <input type="text" class="form-control" id="user_id" >
<label for="name">Name</label> <input type="text" class="form-control"id="name" placeholder="Employee Name">
<label for="designation">Designation</label> <input type="text" class="form-control" id="designation" placeholder="Designation">
<label for="salary_month">Salary Month</label> <input type="month" class="form-control" id="salary_month">
<label for="date">Date</label> <input type="date" class="form-control" id="date">
<label for="basic_salary">Basic Salary</label> <input type="number" class="form-control" id="basic_salary" placeholder="Basic Salary">
<label for="petrol_allowance">Petrol Allowance</label> <input type="number" class="form-control" id="petrol_allowance" placeholder="Petrol Allowance">
<label for="sales_bonus">Sales Bonus</label> <input type="number" class="form-control" id="sales_bonus" placeholder="Sales Incentive QTY x 300">
<label for="amc_bonus">AMC Bonus</label> <input type="number" class="form-control" id="amc_bonus" placeholder="AMC Incentive QTY x 50">
<label for="bonus">Bonus</label> <input type="number" class="form-control" id="bonus" placeholder="Bonus">
<label for="amt_leaves_fullday">Full Day Amount Deduction</label><input type="number" class="form-control" id="amt_leaves_fullday" placeholder="Full Day Amount Deduction">
<label for="amt_leaves_halfday">Half Day Amount Deduction</label><input type="number" class="form-control" id="amt_leaves_halfday" placeholder="Half Day Amount Deduction">
<label for="leaves">Leave Days</label> <input type="text" class="form-control" id="leaves" placeholder="Leave Days">
<label for="half_leaves">Half Leave Days</label> <input type="text" class="form-control" id="half_leaves" placeholder="Half Leave Days">
<label for="leave_dates">Leave Dates (comma separated)</label> <textarea class="form-control" id="leave_dates" placeholder="Leave Dates (comma separated)"></textarea>
<label for="remark">Remark</label> <textarea class="form-control" id="remark" placeholder="Remark"></textarea>
<div class="text-center mt-3">
<button type="submit" id="saveBtn" class="btn btn-primary col-md-2" style="text-size-adjust: 100%;">Save Employ Info  </button>
</div>
{{-- <div class="section-title">Software New Sales</div> --}}

 

   
   <form id="salesForm" method="POST" >
    @csrf     
  <table id="sales_table">
    <thead>
      <tr>
        <th>User ID</th>
        <th>S.No</th>
        <th>Party Name</th>
        <th>Mobile No</th>
        <th>Sale Date</th>
        <th>Software Name</th>
        <th>Software Remark</th>
        <th>Software Amount</th>
        <th>Action</th>
      </tr>
    </thead>
     <td><input type="text" class="form-control" id="userid" ></td>
    <td><input class="form-control" id="s_no" type="number" ></td>
    <td><input class="form-control" id="party" placeholder="Party Name"></td>
    <td><input class="form-control" id="mobile" placeholder="Mobile No"></td>
    <td><input class="form-control" id="saledate" type="date"></td>
    <td><input class="form-control" id="software" placeholder="Software Name"></td>
    <td><input class="form-control" id="remarkfors" placeholder="Software Remark"></td>
    <td><input class="form-control" id="amt" placeholder="Amt"></td>
     <td><button id="saleadd" class="btn btn-primary float-end btn-add" >+</button></td>
    <tbody></tbody>
  </table>

    <table id="stable">
    <thead>
      <tr>
        <th>User ID</th>
        <th>S.No</th>
        <th>Party Name</th>
        <th>Mobile No</th>
        <th>Sale Date</th>
        <th>Software Name</th>
        <th>Software Remark</th>
        <th>Software Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>


{{-- <div id="message" class="alert mt-3 d-none"></div> --}}


<script>
$(document).ready(function () {

  $.ajaxSetup({
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") }
  });

  // Load employee when selected
  $('#employeeSelect').on('change', function () {
      let empId = $(this).val();
      if (!empId) {
          $('#salaryform')[0].reset();
          return;
      }

    $.get(`/salaryslip/employee/${empId}`, function (emp) {
        $('#user_id').val(emp.id);  
             $('#userid').val(emp.id);  
        $('#name').val(emp.Emp_name);
        $('#designation').val(emp.designation);
        $('#salary_month').val(emp.month);
        $('#basic_salary').val(emp.basic_salary);
        $('#petrol_allowance').val(emp.petrol_allowance);
        $('#sales_bonus').val(emp.sale_incentive);
        $('#amc_bonus').val(emp.amc_incentive);
        $('#bonus').val(emp.bonus);
        $('#amt_leaves_fullday').val(emp.full_day_amt_deduction);
        $('#amt_leaves_halfday').val(emp.halfday_amt_deduction);
        $('#leaves').val(emp.leave_days);
        $('#half_leaves').val(emp.half_days);
        $('#leave_dates').val(emp.leave_dates);
        $('#remark').val(emp.remark);
      });
  });
}); // END document ready
</script>
<script>
// =============================
// show product sale data in table
// =============================
$('#employeeSelect').on('change', function () {
    let empId = $(this).val();

    $.get(`/salaryslip/employee/${empId}/sales`, function (sales) {
        let tbody = $('#stable tbody');
        tbody.empty(); // Clear existing rows

        sales.forEach(function (sale) {
            let row = `<tr>
                <td>${sale.user_id}</td>
                <td>${sale.sno}</td>
                <td>${sale.partyname}</td>
                <td>${sale.mobileno}</td>
                <td>${sale.saledate}</td>
                <td>${sale.softwarename}</td>
                <td>${sale.software_remark}</td>
                <td>${sale.software_account}</td>
                <td><button class="btn btn-danger btn-remove">-</button></td>
            </tr>`;
            tbody.append(row);
        });
    });
});
</script>

<script>
// =============================
// DYNAMIC ADD/REMOVE ROWS
// =============================
// use to store software data 
    $('#saleadd').on('click', function (e) {
        e.preventDefault();
        let formData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            s_no: $('#s_no').val(),
            user_id: $('#userid').val(),
            party: $('#party').val(),
            mobile: $('#mobile').val(),
            ssdate: $('#saledate').val(),
            software: $('#software').val(),
            remark: $('#remarkfors').val(),
            amt: $('#amt').val()
        };
        $.ajax({
            url: "{{ url('software_store') }}",
            type: "POST",
            data: formData,
            success: function (response) 
            {
                console.log("✅ Response received from controller:", response)
                alert(response.message);
                 let newRow = `<tr>
                    <td>${formData.user_id}</td>
                    <td>${formData.s_no}</td>
                    <td>${formData.party}</td>
                    <td>${formData.mobile}</td>
                    <td>${formData.date}</td>
                    <td>${formData.software}</td>
                    <td>${formData.remark}</td>
                    <td>${formData.amt}</td>
                    <td><button class="btn btn-danger btn-remove">-</button></td>
                </tr>`;
                  $('#sales_table tbody').append(newRow);
                // Clear input fields
                $('#s_no, #userid, #party, #mobile, #date, #software, #remark, #amt').val('');
            },
            error: function (xhr) {
                console.error("❌ Error sending data:", xhr.responseText);
                alert("Something went wrong!");
            }

        });
    });
</script>



<script>
// =============================
// SEND FORM DATA TO CONTROLLER
// =============================
$('#saveBtn').on('click', function (e) {
    e.preventDefault(); // stop form reload

    let formData = {
        _token: $('meta[name="csrf-token"]').attr('content'),
        employee_id: $('#employeeSelect').val(),
        user_id: $('#user_id').val(),
        name: $('#name').val(),
        designation: $('#designation').val(),
        salary_month: $('#salary_month').val(),
        date: $('#date').val(),
        basic_salary: $('#basic_salary').val(),
        petrol_allowance: $('#petrol_allowance').val(),
        sales_bonus: $('#sales_bonus').val(),
        amc_bonus: $('#amc_bonus').val(),
        bonus: $('#bonus').val(),
        amt_leaves_fullday: $('#amt_leaves_fullday').val(),
        amt_leaves_halfday: $('#amt_leaves_halfday').val(),
        leaves: $('#leaves').val(),
        half_leaves: $('#half_leaves').val(),
        leave_dates: $('#leave_dates').val(),
        remark: $('#remark').val()
    };

    $.ajax({
        url: "{{ url('salaryslip_update') }}",
        type: "POST",
        data: formData,
        success: function (response) {
            console.log("✅ Response received from controller:", response);
            alert(response.message);
        },
        error: function (xhr) {
            console.error("❌ Error sending data:", xhr.responseText);
            alert("Something went wrong!");
        }
    });
});

</script>

</body>
</html>
