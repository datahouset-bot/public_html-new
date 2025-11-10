<?php

namespace App\Http\Controllers;

use App\Models\compinfofooter;
use App\Http\Requests\StorecompinfofooterRequest;
use App\Http\Requests\UpdatecompinfofooterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompinfofooterController extends Controller
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
        $compinfofooter = compinfofooter::find(1);
        if (!$compinfofooter) {
            $compinfofooter = new compinfofooter();
            $compinfofooter->id = 1;
            $compinfofooter->bank_name = "enterbankname" ;
            $compinfofooter->bank_ac_no = "Eneter Bank A/C NO ";
            $compinfofooter->bank_ifsc ="Eneter Bank ifsc ";
            $compinfofooter->upiid = "upiid";
            $compinfofooter->pay_no = "pay_no";
            $compinfofooter->bank_branch = "bank_branch";
            $compinfofooter->voucher_prefix = "voucher_prefix";
            $compinfofooter->voucher_suffix = "voucher_suffix";
            $compinfofooter->voucher_note = "voucher_note";
            $compinfofooter->country = "country";
            $compinfofooter->currency = "currency";
            $compinfofooter->terms = "terms";
            $compinfofooter->ct1 = "ct1";
            $compinfofooter->ct2 = "ct2";
            $compinfofooter->ct3 = "ct3";
            $compinfofooter->ct4 = "ct4";
            $compinfofooter->ct5 = "ct5";
            $compinfofooter->ct6 = "ct6";
            $compinfofooter->ct7 = "ct7";
            $compinfofooter->ct8 = "ct8";
            $compinfofooter->ct9 = "ct9";
    
    
        
            $compinfofooter->save();
        } 
        return view ('setting.comp_info_footer',['compinfofooter'=>$compinfofooter]);
     
        
     }

    
    public function store(Request $request)
    {
        // echo"<pre>";
        // return print_r($request->all());
        $compinfofooter = compinfofooter::find(1);
        $compinfofooter->bank_name = $request->bank_name;
        $compinfofooter->bank_ac_no = $request->bank_ac_no;
        $compinfofooter->bank_ifsc = $request->bank_ifsc;
        $compinfofooter->upiid = $request->upiid;
        $compinfofooter->pay_no = $request->pay_no;
        $compinfofooter->bank_branch = $request->bank_branch;
        $compinfofooter->voucher_prefix = $request->voucher_prefix;
        $compinfofooter->voucher_suffix = $request->voucher_suffix;
        $compinfofooter->voucher_note = $request->voucher_note;
        $compinfofooter->country = $request->country;
        $compinfofooter->currency = $request->currency;
        $compinfofooter->terms = $request->terms;
        $compinfofooter->ct1 = $request->ct1;
        $compinfofooter->ct2 = $request->ct2;
        $compinfofooter->ct3 = $request->ct3;
        $compinfofooter->ct4 = $request->ct4;
        $compinfofooter->ct5 = $request->ct5;
        $compinfofooter->ct6 = $request->ct6;
        $compinfofooter->ct7 = $request->ct7;
        $compinfofooter->ct8 = $request->ct8;
        $compinfofooter->ct9 = $request->ct9;


        $compinfofooter->update();
  
        return view('setting.comp_info_footer',['compinfofooter' => $compinfofooter])->with('message', 'Record Upaded Successfully!');

        }

    
}
