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
  h2, h3 { text-align: center; margin: 6px 0; background: gray; padding: 12px; color: black;  }
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
   .field-value {
    display: none;
}

@media print {
      #salaryform {
        column-count: 2 !important;
        column-gap: 40px !important;
        column-rule: 2px solid #ccc !important;
    }

    /* KEEP LABEL + VALUE TOGETHER */
    #salaryform label {
        display: block !important;
        position: relative !important;
        font-size: 14px !important;
        margin-bottom: 8px !important;
        padding-right: 140px !important;
        break-inside: avoid !important;     /* Prevent splitting between columns */
        page-break-inside: avoid !important;
    }

    /* VALUE stays inside same label block */
    .field-value {
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        font-size: 14px !important;
        font-weight: bold !important;
        display: inline-block !important;
    }

    /* Hide input fields */
    #salaryform input,
    #salaryform textarea,
    #salaryform select {
        display: none !important;
    }

    label {
        font-size: 14px !important;
        margin:  0 !important;
    }

    /* Container width narrow */
    .container {
        width: 90% !important;
        margin: 0 auto !important;
        padding: 10px !important;
    }
    /* Hide buttons */
    .print-btn,
    .save-btn,
    .deletebtn {
        display: none !important;
    }

    /* Hide sale / amc input sections */
    .no-print,
    .no-print * {
        display: none !important;
    }

    /* Hide sale/AMC input elements */
    #sales_table input,
    #sales_table button,
    #amc_table input,
    #amc_table button {
        display: none !important;
    }
        h2 {
        font-size: 16px !important;
        padding: 4px !important;
        margin: 2px 0 !important;
    }

    h3 {
        font-size: 13px !important;
        padding: 3px !important;
        margin: 1px 0 !important;
    }

    /* Optional: reduce section titles too */
    .section-title {
        font-size: 14px !important;
        padding: 4px !important;
        margin: 6px 0 !important;
    }
      /* ===== SOFTWARE SALE TABLE COLUMN SHRINK ===== */
    #stable th, 
    #stable td {
        font-size: 12px !important;
        padding: 1px !important;
    }

    #stable {
        width: 100% !important;
        table-layout: fixed !important;
    }

    #stable th:nth-child(1) { width: 5% !important; }   /* S.no */
    #stable th:nth-child(2) { width: 5% !important; }  /* User ID */
    #stable th:nth-child(3) { width: 10% !important; }  /* Party */
    #stable th:nth-child(4) { width: 15% !important; }  /* Mobile */
    #stable th:nth-child(5) { width: 15% !important; }  /* Sale Date */
    #stable th:nth-child(6) { width: 12% !important; }  /* Software Name */
    #stable th:nth-child(7) { width: 12% !important; }  /* Remark */
    #stable th:nth-child(8) { width: 10% !important; }  /* Amount */


  #stable tfoot tr,
    #stable tfoot th,
    #stable tfoot td,
    #amctable tfoot tr,
    #amctable tfoot th,
    #amctable tfoot td {
        display: table-row !important;
        visibility: visible !important;
        font-weight: bold !important;
        font-size: 14px !important;
    }

    /* Ensure table is not collapsed incorrectly */
    #stable tfoot,
    #amctable tfoot {
        display: table-footer-group !important;
    }

    /* Hide delete buttons only */
    #stable td:last-child,
    #stable th:last-child,
    #amctable td:last-child,
    #amctable th:last-child {
        display: none !important;
    }

    /* ===== AMC TABLE COLUMN SHRINK ===== */
    #amctable th, 
    #amctable td {
        font-size: 12px !important;
        padding: 1px !important;
    }

    #amctable {
        width: 100% !important;
        table-layout: fixed !important;
    }

    #amctable th:nth-child(1) { width: 5% !important; }
    #amctable th:nth-child(2) { width: 5% !important; }
    #amctable th:nth-child(3) { width: 10% !important; }
    #amctable th:nth-child(4) { width: 15% !important; }
    #amctable th:nth-child(5) { width: 15% !important; }
    #amctable th:nth-child(6) { width: 12% !important; }
    #amctable th:nth-child(7) { width: 12% !important; }
    #amctable th:nth-child(8) { width: 10% !important; }

    /* AMC TABLE - Hide Action Column */
    #amctable th:last-child,
    #amctable td:last-child {
        display: none !important;
        visibility: hidden !important;
    }

}
</style>

</head>
<body>

<div class="container">

  <h2>DATA HOUSE COMPANY
    <h3>Monthly Salary Slip</h3>
  </h2>
  <h3>Employee salary summary</h3>
<form id="salaryform">
  @csrf
  {{-- <button type="button" id="insertEmployee" class="btn btn-info float-end"> --}}
  

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
{{-- <label for="date">Date</label> <input type="date" class="form-control" id="date"> --}}
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
<button class="btn btn-success float-start print-btn" type="button">Print Salary Slip</button>
<button type="submit" id="saveBtn" class="btn btn-primary col-md-2 save-btn">Save Employ Info</button>
<td><button class="btn btn-danger btn-remove float-end deletebtn" data-id="{{$emp->user_id}}">DELETE</button></td>

</div>
{{-- <div class="section-title">Software New Sales</div> --}}

 

   
   <form id="salesForm" method="POST" >
    @csrf     
  <table id="sales_table">
    <thead>
      <tr class="no-print">
        <th>User ID</th>
        {{-- <th>S.No</th> --}}
        <th>Party Name</th>
        <th>Mobile No</th>
        <th>Sale Date</th>
        <th>Software Name</th>
        <th>Software Remark</th>
        <th>Software Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tr class="sale-input-row no-print">
     <td><input type="text" class="form-control" id="userid" readonly></td>
    <input class="form-control" id="s_no" type="hidden" >
    <td><input class="form-control" id="party" placeholder="Party Name"></td>
    <td><input class="form-control" id="mobile" placeholder="Mobile No"></td>
    <td><input class="form-control" id="saledate" type="date"></td>
    <td><input class="form-control" id="software" placeholder="Software Name"></td>
    <td><input class="form-control" id="remarkfors" placeholder="Software Remark"></td>
    <td><input class="form-control" id="amt" placeholder="Amt"></td>
     <td><button id="saleadd" class="btn btn-primary float-end btn-add" >+</button></td></tr>
    <tbody></tbody>
  </table></form>

{{-- // =============================
// AMC SALES TABLE
// ============================= --}}


   {{-- <div class="section-title">AMC Sales</div> --}}
   <form id="amcsale" method="post"></form>
   @csrf
  <table id="amc_table">
    <thead>
      <tr class="no-print">
        <th>User ID</th>
        <th>Party Name</th>
        <th>Mobile No</th>
        <th>AMC Date</th>
        <th>Software Name</th>
        <th>Software Remark</th>
        <th>Software Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tr class="amc-input-row no-print">

      <td><input type="text" class="form-control" id="amcid" readonly></td>
    <input class="form-control" id="a_no" type="hidden" >
    <td><input class="form-control" id="aparty" placeholder="Party Name"></td>
    <td><input class="form-control" id="amobile" placeholder="Mobile No"></td>
    <td><input class="form-control" id="amcdate" type="date" ></td>
    <td><input class="form-control" id="softwareamc" placeholder="Software Name"></td>
    <td><input class="form-control" id="remarkforamc" placeholder="Software Remark"></td>
    <td><input class="form-control" id="amtamc" placeholder="Amt"></td>
     <td><button id="amcadd" class="btn btn-primary float-end btn-add" >+</button></td></tr>
    <tbody></tbody>
  </table>
  </form>

{{-- software sale show --}}
    <table id="stable">
    <thead>
      <tr>
        <th>S.no</th>
        <th>User ID</th>
        <th>Party Name</th>
        <th>Mobile No</th>
        <th>Sale Date</th>
        <th>Software Name</th>
        <th>Software Remark</th>
        <th>Software Amount</th>
        <th>DELETE</th>
      </tr>
    </thead>

    <tbody></tbody>
    <tfoot>
    <tr>
        <th colspan="7" class="text-end">TOTAL :</th>
        <th id="sale_total">0</th>
    </tr>
</tfoot>

  </table>

{{-- amc data showw--}}
  <table id="amctable">
    <thead>
      <tr>
         <th>S.no</th>
        <th>User ID</th>
        <th>Party Name</th>
        <th>Mobile No</th>
        <th>AMC Date</th>
        <th>Software Name</th>
        <th>Software Remark</th>
        <th>Software Amount</th>
        <th>Delete</th>
        
      </tr>
    </thead>
    <tbody></tbody>
    <tfoot>
    <tr>
        <th colspan="7" class="text-end">TOTAL :</th>
        <th id="amc_total">0</th>
    </tr>
</tfoot>

  </table>

</div>
{{-- 
use to show data while print a salaryslip --}}
<script>
 function calculateSaleTotal() {
    let total = 0;

    $("#stable tbody tr").each(function () {
        let value = $(this).find("td:nth-child(8)").text().trim();
        let amt = parseFloat(value);

        if (!isNaN(amt)) {
            total += amt;
        }
    });

    $("#sale_total").text(total);
}
</script>
<script>
function calculateAmcTotal() {
    let total = 0;

    $("#amctable tbody tr").each(function () {
        let value = $(this).find("td:nth-child(8)").text().trim();
        let amt = parseFloat(value);

        if (!isNaN(amt)) {
            total += amt;
        }
    });

    $("#amc_total").text(total);
}

</script>


<script>
function preparePrintValues() {

    document.querySelectorAll("#salaryform label").forEach(label => {

        // Find next INPUT / SELECT / TEXTAREA manually
        let input = label.nextElementSibling;
        while (input && input.nodeType !== 1) {
            input = input.nextSibling;
        }

        if (!input || !["INPUT", "SELECT", "TEXTAREA"].includes(input.tagName))
            return;

        // Remove old span if exists
        let old = label.querySelector(".field-value");
        if (old) old.remove();

        // Create new span
        let span = document.createElement("span");
        span.className = "field-value";
        span.innerText = " " + input.value;

        // INSERT VALUE **INSIDE LABEL**
        label.appendChild(span);
    });
}
document.querySelector(".print-btn").addEventListener("click", function () {
    preparePrintValues();
    calculateSaleTotal();
    calculateAmcTotal();
    window.print();
});

</script>

{{-- 
load employee details
--}}

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
             $("#amcid").val(emp.id);
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

<script>
// =============================
// show product sale data in table
// =============================
$('#employeeSelect').on('change', function () {
    let empId = $(this).val();

    $.get(`/salaryslip/employee/${empId}/sales`, function (sales) {
        let tbody = $('#stable tbody');
        tbody.empty(); // Clear existing rows
let r=1;
        sales.forEach(function (sale) {
            let row = `<tr>
              <td>${r++}</td>
                <td>${sale.user_id}</td>
                <td>${sale.partyname}</td>
                <td>${sale.mobileno}</td>
                <td>${sale.saledate}</td>
                <td>${sale.softwarename}</td>
                <td>${sale.software_remark}</td>
                <td>${sale.software_account}</td>
                <td><button class="btn btn-danger delete-sale">-</button></td>             
            </tr>`;
            tbody.append(row);
        });
        calculateSaleTotal(); 
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
                    <td>${formData.s_no}</td>
                    <td>${formData.user_id}</td>
                    <td>${formData.party}</td>
                    <td>${formData.mobile}</td>
                    <td>${formData.ssdate}</td>
                    <td>${formData.software}</td>
                    <td>${formData.remark}</td>
                    <td>${formData.amt}</td>
                     <td><button class="btn btn-danger ">-</button></td>
                </tr>`;
                  $('#stable tbody').append(newRow);
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
  //======================
  // delete sale data
  //======================
$(document).on("click", ".delete-sale", function () {
    let id = $(this).closest("tr").data("id");

    if (!confirm("Delete this sale?")) return;

    $.ajax({
        url: `"/software_delete/" +${id}`,
        type: "DELETE",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content")
        },
        success: function (res) {
            alert("Sale deleted");
            calculateSaleTotal();
            location.reload();
        }
    });
});


</script>


<script>
//====================================
//show data of amc sale
//====================================
$('#employeeSelect').on('change', function () {
    let empId = $(this).val();

    $.get(`/salaryslip/employee/${empId}/amcs`, function (amc) {
        let tbody = $('#amctable tbody');
        tbody.empty(); // Clear existing rows
let r=1;
        amc.forEach(function (amcs) {
            let row = `<tr>
              <td>${r++}</td>
                <td>${amcs.user_id}</td>
                <td>${amcs.partyname}</td>
                <td>${amcs.mobileno}</td>
                <td>${amcs.amc_date}</td>
                <td>${amcs.softwarename}</td>
                <td>${amcs.software_remark}</td>
                <td>${amcs.software_account}</td>
                  <td><button class="btn btn-danger delete-amc">-</button></td>
            </tr>`;
            tbody.append(row);
        });
       calculateAmcTotal();
    });
});


</script>


<script>
  // ==============================
  // send or store data in amc sale
  // ==============================
    $('#amcadd').on('click', function (e) {
        e.preventDefault();
        let formData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            s_no: $('#a_no').val(),
            user_id: $('#amcid').val(),
            party: $('#aparty').val(),
            mobile: $('#amobile').val(),
            amcdate: $('#amcdate').val(),
            software: $('#softwareamc').val(),
            remark: $('#remarkforamc').val(),
            amt: $('#amtamc').val()
        };
        $.ajax({
            url: " {{url('amc_store') }} ",
            type: "POST",
            data: formData,
            success: function (response) 
            {
                console.log("✅ Response received from controller:", response)
                alert(response.message);
                let newrow=`<tr>
                  <td>${formData.s_no}</td>
                  <td>${formData.user_id}</td>
                    <td>${formData.party}</td>
                    <td>${formData.mobile}</td>
                    <td>${formData.amcdate}</td>
                    <td>${formData.software}</td>
                    <td>${formData.remark}</td>
                    <td>${formData.amt}</td>
                      <td><button class="btn btn-danger ">-</button></td>
                    
                
                </tr>`;
                $('#amctable tbody').append(newrow);

   },
   error:function(xhr){
    console.error("kuch gadbad hai :",xhr.responseText)
    alert("something went wrong");
   
   }
   
  });
});
</script>


<script>
  //=========================
  //DELETE AMC SALE
  //========================

$(document).on("click", ".delete-amc", function () {
    let id = $(this).closest("tr").data("id");

    if (!confirm("Delete this AMC?")) return;

    $.ajax({
        url: `"/amc_delete/" +${id}`,
        type: "DELETE",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content")
        },
        success: function (res) {
            alert("AMC deleted");
            calculateAmcTotal();
            location.reload();
        }
    });
});


</script>

<script>
//==========================
// delete data of sales and amc
//===========================
$(document).on('click', '.deletebtn', function () {
    let userId = $(this).data('id');

    if (!confirm("Delete ALL AMC + Sale data for this user?")) return;

    $.ajax({
        url: `/salaryslip/${userId}`,
        type: "DELETE",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            alert("All AMC + Sale data deleted");
            location.reload();
        }
    });
});

</script>

</body>
</html>
