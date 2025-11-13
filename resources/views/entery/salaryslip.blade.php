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
  .container { max-width: 900px; margin-top: 20px; background: #fff; padding: 20px; border: 1px solid #ccc; }
  h2, h3 { text-align: center; margin: 6px 0; }
  table { width: 100%; border-collapse: collapse; margin-top: 10px; }
  th, td { border: 1px solid #000; padding: 6px; font-size: 14px; }
  th { background: #f0f0f0; }
  input, select, textarea { margin: 5px 0; }
  .section-title { background: #e8e8e8; padding: 8px; font-weight: bold; margin-top: 8px; }
  .btn:hover { background: #0056b3; }
</style>

</head>
<body>

<div class="container">

  <h2>DATA HOUSE COMPANY</h2>
  <h3>Monthly Salary Slip</h3>
<form id="salaryform">
  @csrf
  {{-- <button type="button" id="insertEmployee" class="btn btn-info float-end"> --}}
  

  <div class="section-title">Employee Details</div>

  <select id="employeeSelect" class="form-select">
      <option value="">-- Select Employee --</option>
     @foreach ($employees as $emp)
    <option value="{{ $emp->id }}">{{ $emp->Emp_name }} ({{ $emp->designation }})</option>
@endforeach
  </select>
  <input type="text" class="form-control" id="user_id" >
  <input type="text" class="form-control" id="name" placeholder="Employee Name">
  <input type="text" class="form-control" id="designation" placeholder="Designation">
  <input type="month" class="form-control" id="salary_month">
  <input type="date" class="form-control" id="date">

  <br>

  <input type="number" class="form-control" id="basic_salary" placeholder="Basic Salary">
  <input type="number" class="form-control" id="petrol_allowance" placeholder="Petrol Allowance">
  <input type="number" class="form-control" id="sales_bonus" placeholder="Sales Incentive QTY x 300">
  <input type="number" class="form-control" id="amc_bonus" placeholder="AMC Incentive QTY x 50">
  <input type="number" class="form-control" id="bonus" placeholder="Bonus">

  <br>

  <input type="number" class="form-control" id="amt_leaves_fullday" placeholder="Full Day Amount Deduction">
  <input type="number" class="form-control" id="amt_leaves_halfday" placeholder="Half Day Amount Deduction">
  <input type="text" class="form-control" id="leaves" placeholder="Leave Days">
  <input type="text" class="form-control" id="half_leaves" placeholder="Half Leave Days">
  <textarea class="form-control" id="leave_dates" placeholder="Leave Dates (comma separated)"></textarea>
  <textarea class="form-control" id="remark" placeholder="Remark"></textarea>

 <div class="text-center mt-3">
    <button type="submit" id="saveBtn" class="btn btn-primary">Save Employ Info  </button>



</div>


</form>

<div id="message" class="alert mt-3 d-none"></div>

</div>

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
        $('#name').val(emp.Emp_name);
          $('#designation').val(emp.designation);
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
