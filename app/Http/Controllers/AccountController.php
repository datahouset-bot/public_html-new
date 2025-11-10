<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use App\Imports\accountImport;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreaccountRequest;
use App\Http\Requests\UpdateaccountRequest;
use Maatwebsite\Excel\Facades\Excel;

class AccountController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }
    /**
     * All account Resource Desplay Through Account Controller 
     */
    public function index()
    {
        // return ("helow account page ");
        $record=account::all();
        return view('master.account',['data'=>$record]);
    }
    public function index_dt()
    {
        // return ("helow account page ");
        $record=account::all();
        return view('master.account_dt',['data'=>$record]);
    }
    public function account_import()
    {
        // return ("helow account page ");
        $record=account::all();
        return view('master.account_import');
    }
    public function import(Request $request)
    {


        ini_set('max_execution_time',3600);
        $validator= validator ::make ($request->all(),[
            'file'=>'required'

        ]);

        if($validator->passes()){
    
            $file=$request->file;
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move(public_path().'/uploads',$filename);
            $path=public_path().'/uploads/'.$filename;


             Excel::import(new accountImport, $path);
        


           return redirect('/account_import')->with('message', 'The record has been successfully inserted .'); 
        


        }
        else{
            return redirect()->back()->withErrors($validator);

        }




        
   

    }




    public function accountform()
    {
        //show the list of account landing page 
        
        return view('master.accountform');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        // echo"<pre>";
        // print_r($request->all());

        
        
        $validator= validator::make($request->all(),[
            'account_name' => 'required|unique:accounts',
            'account_group' => 'required',
            'balnce_type' => 'required'
            ]);
        // echo"<pre>";
        // print_r($request->all());
        if($validator->passes())
           {
            echo"<pre>";
        print_r($request->all());

                  $account=new account;
                  $account->account_name=$request->account_name;
                  $account->account_group=$request->account_group;
                  $account->op_balnce=$request->op_balnce;
                  $account->balnce_type=$request->balnce_type;
                  $account->city=$request->city;
                  $account->state=$request->state;
                  $account->phone=$request->phone;
                  $account->mobile=$request->mobile;
                 $account->person_name=$request->person_name;
                  $account->gst_no=$request->gst_no;
                  $account->address=$request->address;
                  $account->email=$request->email;
                 
                 $account->save();
                return redirect('account');
           }

           else{
            return redirect('/accountform')->withInput()->withErrors($validator);
        
              }

    }

    


    

    
    public function destroy(account $account,$id)
    {
        account::destroy(['id',$id]);         
        return redirect('account');

    }
    public function show_account_form_edit($id)
    {      
        $record= account::find($id);

        return view('master.accountformedit',['data'=>$record]);

    }
    public function edit_account(Request $request)
    {
        // this is use for save the record of edited item 
         $validator= validator::make($request->all(),[
            'account_name' => 'required',
            'account_group' => 'required',
            'balnce_type' => 'required'
         ]);
    //    echo "account updation form request ";
    //     echo"<pre>";
    //     print_r($request->all());
         if($validator->passes())
            {
              $account=account::find($request->id);
              $account->account_name=$request->account_name;
              $account->account_group=$request->account_group;
              $account->op_balnce=$request->op_balnce;
              $account->address=$request->address;
              $account->email=$request->email;
              $account->state=$request->state;

              $account->balnce_type=$request->balnce_type;
              $account->city=$request->city;
              $account->state=$request->state;
              $account->phone=$request->phone;
              $account->mobile=$request->mobile;
  
              $account->person_name=$request->person_name;
              $account->gst_no=$request->gst_no;
              $account->update();
               return redirect('account');
           }

          else{
            return redirect('/account')->withInput()->withErrors($validator);
              } 
    }               

    public function accountformview($id)
    {      
        $record= account::find($id);

        return view('master.accountformview',['data'=>$record]);
      
    }


    public function downloadExcel()
    {
        $filePath = public_path('uploads/sample/Account_import.xlsx');

        if (file_exists($filePath)) {
            return Response::download($filePath, 'Account_import.xlsx');
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }

}
