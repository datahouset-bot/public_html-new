<?php

namespace App\Http\Controllers;

use App\Models\Amcsale;
use App\Models\User;
use App\Models\Employee;
use App\Models\productsale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class salarycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // { $users = User::all();
    //     return view('entery.salaryslip',['users'=>$users]);
    // }
public function index()
{
    $employees = Employee::all();
    return view('entery.salaryslip', compact('employees'));
}
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { $users = User::all();
        return view('entery.salaryslip_insert', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate= validator::make($request->all(),[
            'emp_name' => 'required|unique:employees,emp_name',
            'salary_month' => 'required',
            'designation'=>'required',
            'basic_salary' => 'required|numeric',
            'sale_bonus' => 'nullable|numeric',
            'amc_bonus' => 'nullable|numeric',
            'bonus' => 'nullable|numeric',
            'petrol_allowances' => 'nullable|numeric',
            'amt_leaves_fullday' => 'nullable|numeric',
            'amt_leaves_halfday' => 'nullable|numeric',
            'leave_dates' => 'nullable|string',
            'remark' => 'nullable|string',
        ]);
        if($validate->fails())
        { return redirect('home')->with('error',$validate->errors()->toArray());
        }
        else
        {
        $employee = new Employee();
        $employee->user_id = $request->employee;
        $employee->emp_name = $request->emp_name;
        $employee->month = $request->salary_month;
        $employee->designation = $request->designation;
        $employee->basic_salary = $request->basic_salary;           
        $employee->sale_incentive = $request->sales_bonus;
        $employee->amc_incentive = $request->amc_bonus;
        $employee->bonus = $request->bonus;
        $employee->petrol_allowance = $request->petrol_allowance;
        $employee->full_day_amt_deduction = $request->amt_leaves_fullday;
        $employee->halfday_amt_deduction = $request->amt_leaves_halfday;
        $employee->leave_dates = $request->leave_dates;
        $employee->remark = $request->remark;
        $employee->save();
        return redirect("salaryslip")->with('success','Salary slip created successfully.');
        }
    

    }
 public function softwareStore(Request $request)
    {
        $data = $request->all();
        
        $validate= validator::make($request->all(),[
            'user_id' => 'required|numeric',
            'party' => 'required|string',
            'mobile'=>'required|string',
            'saledate' => 'nullable|numeric',
            'software' => 'required|string',
            'remark' => 'nullable|string',
            'amt' => 'required|numeric',
        ]);
        if($validate->fails())
        { return response()->json(['errors' => $validate->errors(),'message' => 'Validation failed','data' => $data], 422);  ;
        }
        $productsale = new productsale();
        $productsale->sno = $request->s_no;
        $productsale->user_id = $request->user_id;
        $productsale->partyname = $request->party;
        $productsale->mobileno = $request->mobile;
        $productsale->saledate = $request->ssdate;
        $productsale->softwarename = $request->software;
        $productsale->software_remark = $request->remark;
        $productsale->software_account = $request->amt;
        $productsale->save();
        return response()->json(['message' => 'Software sale recorded successfully!','data' => $productsale], 200);

    }

// store amc data
public function amcstore(Request $request)
{
    $data=$request->all();
    $validate=validator::make($request->all(),[
        
            'user_id' => 'required|numeric',
            
            'amt' => 'required|numeric',
    ]);
if($validate->fails()){
   return response()->json(['errors' => $validate->errors(),'message' => 'Validation failed','data' => $data], 422);  ; 
}
$amcsale=new Amcsale();
$amcsale->sno=$request->s_no;
$amcsale->user_id=$request->user_id;
$amcsale->partyname = $request->party;
$amcsale->mobileno = $request->mobile;
$amcsale->amc_date = $request->amcdate;
$amcsale->softwarename = $request->software;
$amcsale->software_remark = $request->remark;
$amcsale->software_account = $request->amt;
$amcsale->save();

return response()->json(['message'=>'Amc save successfully!','data'=>$data],200);
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
// update software details
public function updateSale(Request $request, $id)
{
    // Find the sale record
  

  
  
}

public function update(Request $request)
{
    $data = $request->all();

    // Find employee using employee_id or user_id
    $employee = Employee::find($request->employee_id ?? $request->user_id);

    if (!$employee) {
        return response()->json([
            'message' => 'Employee not found!',
            'data' => $data
        ], 404);
    }

    // Update all fields safely
    $employee->Emp_name             = $data['name'] ?? $employee->Emp_name;
    $employee->designation          = $data['designation'] ?? $employee->designation;
    $employee->basic_salary         = $data['basic_salary'] ?? $employee->basic_salary;
    $employee->petrol_allowance     = $data['petrol_allowance'] ?? $employee->petrol_allowance;
    $employee->sale_incentive       = $data['sales_bonus'] ?? $employee->sale_incentive;
    $employee->amc_incentive        = $data['amc_bonus'] ?? $employee->amc_incentive;
    $employee->bonus                = $data['bonus'] ?? $employee->bonus;
    $employee->full_day_amt_deduction = $data['amt_leaves_fullday'] ?? $employee->full_day_amt_deduction;
    $employee->halfday_amt_deduction  = $data['amt_leaves_halfday'] ?? $employee->halfday_amt_deduction;
    $employee->leave_days           = $data['leaves'] ?? $employee->leave_days;
    $employee->half_days            = $data['half_leaves'] ?? $employee->half_days;
    $employee->leave_dates          = $data['leave_dates'] ?? $employee->leave_dates;
    $employee->remark               = $data['remark'] ?? $employee->remark;

    $employee->update(); // ✅ use save() or update()

    return response()->json([
        'message' => 'DATA UPDATED SUCCESSFULLY!',
        'updated_data' => $employee
    ]);
}

public function destroy(string $id)
{
    // Delete AMC records
    $amcDeleted = amcsale::where('user_id', $id)->delete();

    // Delete Software Sales records
    $saleDeleted = productsale::where('user_id', $id)->delete();


    if ($amcDeleted || $saleDeleted) {
        return response()->json([
            'success' => true,
            'message' => 'AMC + Sale data deleted'
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'No data found'
    ], 404);
}

    /**
     * Remove the specified resource from storage.
     */
    
    public function getEmployees()
{
    return Employee::get();
}

public function getEmployeeDetails($id)
{
    return Employee::findOrFail($id);
}

public function getUserDetails($id)
{
    $user = User::findorfail($id);

    return response()->json($user);
}

public function getEmployeeSales($id)
{
    $sales = productsale::where('user_id', $id)->get();

    return response()->json($sales);

}
public function getEmployeeamcs ($id)
{
    $amc=Amcsale::where('user_id',$id)->get();
    return response()->json($amc);
}

public function deleteSale($id)
{
    $sale = productsale::find($id);

    if (!$sale) {
        return response()->json(['error' => 'Sale not found'], 404);
    }

    $sale->delete();

    return response()->json(['message' => 'Sale deleted successfully']);
}

public function deleteAmc($id)
{
    $amc = AmcSale::find($id);

    if (!$amc) {
        return response()->json(['error' => 'AMC not found'], 404);
    }

    $amc->delete();

    return response()->json(['message' => 'AMC deleted successfully']);
}



}
