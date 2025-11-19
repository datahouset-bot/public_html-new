<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Employee Salary Slip Generator</title>
<style>
  body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; }
  .container { max-width: 90%; margin: 20px auto; background: #fff; padding: 20px; border: 1px solid #ccc; }
  h2{ text-align: center; margin: 6px 0; background: gray; padding: 12px; color: #fff;  }
  input, select { padding: 6px; margin: 4px 0; width: calc(100% - 10px); }
  textarea { width: 100%; height: 60px; margin-top: 8px; }
  .btn { background: #007bff; color: #fff; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px; }
  .btn:hover { background: #0056b3; }
 .section-title { text-align: center;font-size:26px; background: grey; padding:8px; font-weight:bolder; margin-top: 20px; }
input::placeholder { font-size: 12px; color:grey; }
textarea::placeholder { font-size: 15px; color:grey; }
  @media print {
    .no-print, input, select, textarea, button, .section-title { display: none !important; }
    body { background: #fff; }
    .container { border: none; box-shadow: none; }
  }
</style>
</head>
<body>

<div class="container">
  <h2>DATA HOUSE COMPANY</h2>
  {{-- <h3>Monthly Salary Slip</h3> --}}

  <!-- Correct FORM -->
  <form action="{{ route('salaryslip.store') }}" method="POST">
      @csrf

      <!-- Employee Detail Section -->
      <div class="section-title">Employee Details</div>
<select name="employee" id="employeeSelect" class="form-select">
      <option value="">-- Select Employee --</option>
     @foreach ($users as $user)
    <option value="{{ $user->id }}">{{ $user->name }}</option>
@endforeach
  </select>

     <label for="name">Employee Name</label> <input name="emp_name" id="emp_name" placeholder="Employee Name same as User">
      <label for="designation">Designation</label> <input name="designation" id="designation" placeholder="Designation">
      <label for="salary_month">Salary Month</label> <input name="salary_month" id="salary_month" type="month" placeholder="salary Month">
      {{-- <label for="slip_date">Slip Date</label> <input name="slip_date" id="date" type="date" placeholder="Slip Date"> --}}
      <br>
      <label for="basic_salary">Basic Salary</label> <input name="basic_salary" id="basic_salary" type="number" placeholder="Basic Salary">
      <label for="petrol_allowance">Petrol Allowance</label> <input name="petrol_allowance" id="petrol_allowance" type="number" placeholder="Petrol Allowance">
      <label for="sales_bonus">Sales Bonus</label> <input name="sales_bonus" id="sales_bonus" type="number" placeholder="Sales / Incentive QTY × 300">
      <label for="amc_bonus">AMC Bonus</label> <input name="amc_bonus" id="amc_bonus" type="number" placeholder="AMC / Incentive QTY × 50">
      <label for="bonus">Bonus</label> <input name="bonus" id="bonus" type="number" placeholder="Bonus / Incentive">
      <br>
      <label for="amt_leaves_fullday">Full Day Deduction Amount</label> <input name="amt_leaves_fullday" id="amt_leaves_fullday" type="number" placeholder="Full Day Deduction Amount">
      <label for="amt_leaves_halfday">Half Day Deduction Amount</label> <input name="amt_leaves_halfday" id="amt_leaves_halfday" type="number" placeholder="Half Day Deduction Amount">
      <label for="leaves">Enter Full-Day Leave Dates</label> <input name="leaves" id="leaves" placeholder="Enter Full-Day Leave Dates">
      <label for="half_leaves">Enter Half-Day Leave Dates</label> <input name="half_leaves" id="half_leaves" placeholder="Enter Half-Day Leave Dates">
      <label for="leave_dates">Leave Dates</label><textarea name="leave_dates" id="leave_dates" placeholder="Enter leave dates (comma separated)"></textarea>
      <textarea name="remark" id="remark" placeholder="Remark"></textarea>
      <div>
        <button type="submit" id="saveBtn" class="btn btn-primary">ADD EMPLOYEE</button>
      </div>
  </form>
<script>
$(document).ready(function() {
    $('#employeeSelect').change(function() {
        let userId = $(this).val();

        
        if (!userId) return;

        $.ajax({
            url: "/get-user-details/" + userId,
            type: "GET",
            success: function(user) {

                // Auto-fill fields
                $('#emp_name').val(user.name);

            }
        });
    });
});
</script>
</div>
</body>
</html>
