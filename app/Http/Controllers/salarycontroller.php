<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
// use App\Models\Employees;
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
public function update(Request $request, $id)
{
    dd('$request->all()');
    $employee = Employee::findOrFail($id);

    $employee->user_id = $request->employee_id;
    $employee->employee_name = $request->name;
    $employee->designation = $request->designation;
    $employee->month = $request->salary_month;
    $employee->basic_salary = $request->basic_salary;
    $employee->petrol_allowance = $request->petrol_allowance;

    $employee->sale_incentive = $request->sales_bonus;
    $employee->amc_incentive = $request->amc_bonus;
    $employee->bonus = $request->bonus;

    $employee->full_day_amt_deduction = $request->amt_leaves_fullday;
    $employee->half_day_amt_deduction = $request->amt_leaves_halfday;

    $employee->leave_dates = $request->leave_dates;
    $employee->remark = $request->remark;

    $employee->save();

    return response()->json([
        'message' => 'Employee updated successfully!'
    ]);
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
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

}
