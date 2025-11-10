<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quotation</title>
  <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background: #f9f9f9;
    color: #333;
  }

  /* Header */
  .header {
    text-align: center;
    border-bottom: 4px solid #004080;
    padding-bottom: 15px;
    margin-bottom: 20px;
    background: linear-gradient(90deg, #cce0ff, #ffffff);
    position: relative;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    border-radius: 5px;
  }

  .header h2 {
    color: #004080;
    margin: 5px 0;
    font-size: 28px;
  }

  .header h3 {
    color: #0073e6;
    margin: 5px 0;
    font-size: 22px;
  }

  .header p {
    font-size: 14px;
    margin: 2px 0;
  }

  .logo-left, .qr-right {
    position: absolute;
    top: 10px;
  }
.logo-left { left: 10px; }
  .qr-right { right: 10px; }
  #itemTable th {
    background: #004080;
    color: #fff;
    padding: 8px;
    text-align: left;
  }
    table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
    th, td { border: 1px solid #000; padding: 2px; text-align: left; vertical-align: top; }
    th { background: #f0f0f0; }
    .right { text-align: right; padding-right: 10px; }
    .no-border td { border: none; }
    .terms { font-size: 12px; text-align: left; margin-top: 20px; }
    .center { text-align: center; }
    .left { text-align: left; }
    .footer-sign { position: relative; margin-top: 40px; }
    .footer-sign img { position: absolute; right: 20px; bottom: 0; opacity: 0.9; }
    input[type="text"], input[type="date"], input[type="number"] { width: 95%; padding: 3px; }
    .form-section { margin-bottom: 20px; }
    .controls { margin: 15px 0; }
    @media print {
     label, input, button, .controls { display: none !important; }
    }
  </style>
</head>
<body>

<div class="header">
  <div class="logo-left"><img src="{{ asset('\storage\app\public\image\\' . $comppic->logo) }}" alt="Logo" width="130"></div>
  <div class="qr-right"><img src="{{ asset('\storage\app\public\image\\' . $comppic->brand) }}" alt="QR" width="150"></div>
  <h2>{{$componyinfo->cominfo_firm_name}}</h2>
  <p>{{$componyinfo->cominfo_address1}}&nbsp;<br> {{$componyinfo->cominfo_address2}}<br>{{$componyinfo->cominfo_phone}}&nbsp;{{$componyinfo->cominfo_mobile}} &nbsp;{{$componyinfo->cominfo_email}}</p>
  
 <p style="font-weight: 500; ">GST NO :  {{$componyinfo->cominfo_gst_no}}</p>
  <h3>QUOTATION</h3>
</div>

<div class="form-section">
  <table class="no-border">
    <tr>
      <td><b>Quotation No:</b> <span id="q_no_txt"></span> <input type="text" id="q_no" value=""></td>
      <td><b>Date:</b> <span id="q_date_txt"></span> <input type="date" id="q_date"></td>
    </tr>
    <tr>
      <td><b>Customer:</b> <span id="q_customer_txt"></span> <input type="text" id="q_customer"></td>
      <td><b>Mobile:</b> <span id="q_mobile_txt"></span> <input type="text" id="q_mobile"></td>
    </tr>
    <tr>
      <td><b>Address:</b> <span id="q_address_txt"></span> <input type="text" id="q_address"></td>
      <td><b>Customer GST:</b> <span id="q_custgst_txt"></span> <input type="text" id="q_custgst"></td>
    </tr>
    <tr>
      <td colspan="2">
        <label><input type="checkbox" id="igst_option"> Apply IGST instead of SGST + CGST</label>
      </td>
    </tr>
  </table>
</div>

<!-- Items Table -->
<table id="itemTable">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Item Name & Description</th>
      <th>Qty</th>
      <th>Rate</th>
      <th>Dis%</th>
      <th>GST%</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>
        <span class="item_name_txt"></span><br>
        <small class="item_desc_txt"></small>
        <input type="text" class="item_name" value=""><br>
        <input type="text" class="item_desc" value="">
      </td>
      <td><span></span><input type="number" value=""></td>
      <td><span></span><input type="number" value=""></td>
      <td><span></span><input type="number" value=""></td>
      <td><span></span><input type="number" value=""></td>
      <td class="amount">0</td>
    </tr>
  </tbody>
</table>

<div class="controls">
  <button onclick="addRow()">+ Add Item</button>
  <button onclick="generateQuotation()">Generate Quotation</button>
  <button onclick="window.print()">🖨 Print</button>
</div>

<!-- Totals -->
<table>
  <tbody>
    <tr><td colspan="6" class="right">Basic Amount</td><td id="basicAmt">0</td></tr>
    <tr><td colspan="6" class="right">SGST</td><td id="sgstAmt">0</td></tr>
    <tr><td colspan="6" class="right">CGST</td><td id="cgstAmt">0</td></tr>
    <tr><td colspan="6" class="right">IGST</td><td id="igstAmt">0</td></tr>
    <tr><td colspan="6" class="right"><b>Grand Total</b></td><td id="grandTotal">0</td></tr>
  </tbody>
</table>

<div class="footer">


<div style="display: flex; gap: 20px; margin-top: 20px; flex-wrap: wrap;">

  <!-- Bank Details (50%) -->
  <div style="flex: 1 1 45%; min-width: 300px;">
    <table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif; box-shadow: 0 2px 6px rgba(0,0,0,0.15); border-radius: 5px; overflow: hidden;">
      <tr style="background: #004080; color: #fff;">
        <td colspan="2" style="padding: 10px; font-weight: bold; text-align: center; font-size: 16px;">Bank Details</td>
      </tr>
      <tr style="background: #cce0ff;">
        <td style="padding: 8px; font-weight: bold;">Bank Name:</td>
        <td style="padding: 8px;">{{$compinfofooter->bank_name}}</td>
      </tr>
      <tr style="background: #e6f2ff;">
        <td style="padding: 8px; font-weight: bold;">A/C No:</td>
        <td style="padding: 8px;">{{$compinfofooter->bank_ac_no}}</td>
      </tr>
      <tr style="background: #cce0ff;">
        <td style="padding: 8px; font-weight: bold;">IFSC CODE:</td>
        <td style="padding: 8px;">{{$compinfofooter->bank_ifsc}}</td>
      </tr>
      <tr style="background: #e6f2ff;">
        <td style="padding: 8px; font-weight: bold;">Branch:</td>
        <td style="padding: 8px;">{{$compinfofooter->bank_branch}}</td>
      </tr>
    </table>
  </div>

  <!-- Terms & Conditions (50%) -->
  <div style="flex: 1 1 45%; min-width: 300px;">
    <div style="background: #f0f8ff; border-left: 4px solid #004080; padding: 15px; border-radius: 5px; box-shadow: 0 1px 4px rgba(0,0,0,0.1);">
      <p style="margin: 0; font-size: 14px; line-height: 1.5;">
        <b>Terms & Conditions:</b><br>
        {{$compinfofooter->terms}}
      </p>
    </div>
  </div>

</div>



    <div class="footer-sign">
    <table class="no-border" style="width:100%;">
      <tr>
        <td class="left">Customer Signature</td>
        

          
        <td class="left">    <img src="{{ asset('\storage\app\public\image\\' . $comppic->seal) }}" alt="Seal" width="120"></td>
      </tr>
          </table>

  </div>
  <br>
      <div style="display: grid; grid-template-columns: 50% 50%; width: 100%; margin-top: 1px;">

  <!-- Left Side -->
  <div style="text-align: center;">
    <img src="{{ asset('storage/app/public/image/' . $comppic->qrcode) }}" 
         alt="QR Code" width="120">
    <p style="margin:5px 0 0; font-size:12px;">Scan for Payment</p>
  </div>

  <!-- Right Side -->
  <div style="text-align: center;">
    <img src="{{ asset('storage/app/public/image/' . $comppic->signature) }}" 
         alt="Signature" width="120">
    <p style="margin:5px 0 0; font-size:12px;">Authorized Signatory</p>
  </div>

</div>
</div>

<script>
function addRow() {
  const table = document.getElementById("itemTable").getElementsByTagName("tbody")[0];
  const rowCount = table.rows.length + 1;
  const row = table.insertRow();
  row.innerHTML = `
    <td>${rowCount}</td>
    <td>
      <span class="item_name_txt"></span><br>
      <small class="item_desc_txt"></small>
      <input type="text" class="item_name"><br>
      <input type="text" class="item_desc">
    </td>
    <td><span></span><input type="number" value="1"></td>
    <td><span></span><input type="number" value="0"></td>
    <td><span></span><input type="number" value="0"></td>
    <td><span></span><input type="number" value="18"></td>
    <td class="amount">0</td>
  `;
}

function generateQuotation() {


    // fill header
  document.getElementById("q_no_txt").innerText = document.getElementById("q_no").value;
// Get date from input
let dateInput = document.getElementById("q_date").value; // e.g. "2025-09-23"

// Convert to DD-MM-YYYY
if (dateInput) {
    let parts = dateInput.split('-'); // ["YYYY","MM","DD"]
    let formattedDate = parts[2] + '-' + parts[1] + '-' + parts[0]; // "DD-MM-YYYY"
    document.getElementById("q_date_txt").innerText = formattedDate;
} else {
    document.getElementById("q_date_txt").innerText = '';
}

  document.getElementById("q_customer_txt").innerText = document.getElementById("q_customer").value;
  document.getElementById("q_mobile_txt").innerText = document.getElementById("q_mobile").value;
  document.getElementById("q_address_txt").innerText = document.getElementById("q_address").value;
  document.getElementById("q_custgst_txt").innerText = document.getElementById("q_custgst").value;


  let basic = 0, gstTotal = 0;
  const rows = document.querySelectorAll("#itemTable tbody tr");
  rows.forEach(row => {
    const name = row.querySelector(".item_name").value;
    const desc = row.querySelector(".item_desc").value;
    row.querySelector(".item_name_txt").innerText = name;
    row.querySelector(".item_desc_txt").innerText = desc;


    const qty = parseFloat(row.cells[2].querySelector("input").value) || 0;
    const rate = parseFloat(row.cells[3].querySelector("input").value) || 0;
    const dis = parseFloat(row.cells[4].querySelector("input").value) || 0;
    const gst = parseFloat(row.cells[5].querySelector("input").value) || 0;

    let amount = qty * rate;
    let disAmt = amount * dis / 100;
    let taxable = amount - disAmt;
    let gstAmt = taxable * gst / 100;
    row.cells[6].innerText = taxable.toFixed(2);

    row.cells[2].querySelector("span").innerText = qty;
    row.cells[3].querySelector("span").innerText = rate;
    row.cells[4].querySelector("span").innerText = dis;
    row.cells[5].querySelector("span").innerText = gst;

    basic += taxable;
    gstTotal += gstAmt;
  });

  const igstSelected = document.getElementById("igst_option").checked;
  let sgst = 0, cgst = 0, igst = 0;

  if (igstSelected) {
    igst = gstTotal;
  } else {
    sgst = gstTotal / 2;
    cgst = gstTotal / 2;
  }

  const grand = basic + gstTotal;

  document.getElementById("basicAmt").innerText = basic.toFixed(2);
  document.getElementById("sgstAmt").innerText = sgst.toFixed(2);
  document.getElementById("cgstAmt").innerText = cgst.toFixed(2);
  document.getElementById("igstAmt").innerText = igst.toFixed(2);
  document.getElementById("grandTotal").innerText = grand.toFixed(2);
const inputs = document.querySelectorAll("#itemTable tbody tr input");
inputs.forEach(input => input.style.display = "none");

  
}
</script>

</body>
</html>
