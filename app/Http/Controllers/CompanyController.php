<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $record=company::all();
        return view('master.companylist',['data'=>$record]);
        //
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //comapny data insert to table 
        //        echo"<pre>";
        // print_r($request->all());
           
         $validator= validator::make($request->all(),[
            'comp_name' => 'required|unique:companies',
             'comp_dis' => 'numeric', // Assuming you meant "float", you can use numeric instead.
            ]);
            if ($validator->passes()) {
                $company = new Company;
                $company->comp_name = $request->comp_name;
                $company->comp_dis = $request->comp_dis;
                $company->save();
        
                return redirect()->route('company')->with('message', 'Company created successfully!');
            } else {
                return redirect('/savecompany')->withInput()->withErrors($validator);
            }
 

    }

    public function destroy(company $compnies,$id)

    {
        company::destroy(['id',$id]);         
        return redirect('company');

        //
    }

    public function show_company_form_edit($id)
    {      
        $record= company::find($id);

        return view('master.companyedit',['data'=>$record]);

    }

    public function edit_company(Request $request)
    {
    
           
    
    
        $validator= validator::make($request->all(),[
            'comp_name' => 'required',
              // Assuming you meant "float", you can use numeric instead.
            ]);
            if ($validator->passes()) {
                $company = Company::find($request->id);
                $company->comp_name = $request->comp_name;
                $company->comp_dis = $request->comp_dis;
                $company->update();
                return redirect('company');
 
            } else {
                return redirect('showeditecompany')->withInput()->withErrors($validator);
            }


}
}