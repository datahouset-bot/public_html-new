<?php

namespace App\Http\Controllers;
use auth;
use Carbon\Carbon;
use App\Models\Lead;
use App\Models\todo;
use App\Models\Followup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function index()
    {
        return view ('callmanagement.coldcall');
    }
    public function entry_by_customer()
    {
        return view ('callmanagement.coldcall_bycustomer');
    }
            public function todo_by_customer()
    {

        $record = Todo::query()->where('reminder_af1', '=', '0')->get();
        // $record = Todo::query()->where('reminder_af1', '=', '1')->get();
          // $record=todo::all();
        return view('callmanagement.todo_by_customer',['data'=>$record]);

        
    }
    public function store_todo_bycustomer(Request $request)
    {
        
                // comapny data insert to table 
        //        echo"<pre>";
        // print_r($request->all());

  

  
         $validator= validator::make($request->all(),[
            'reminder_title' => 'required',
            'reminder_name' => 'required',
            'reminder_disc' => 'required',
            'reminder_date_given'=>'required',
             
             ]);
            if ($validator->passes()) {
                $received_date=$request->reminder_date_given;
                $parsed_date = Carbon::createFromFormat('d-m-Y', $received_date);
                 $formatted_date = $parsed_date->format('Y-m-d');


                 $todo = new todo;
                $todo->reminder_date = $formatted_date;
                $todo->reminder_title = $request->reminder_title;
                $todo->reminder_name = $request->reminder_name;
                $todo->reminder_mobile = $request->reminder_mobile;
                $todo->reminder_city = $request->reminder_city;
                $todo->reminder_disc = $request->reminder_disc;
                $todo->reminder_af2 = $request->reminder_af2;


                 $todo->save();
        
return response()->make('
        <html>
        <head>
            <title>Record Saved</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body class="bg-light">
            <div class="container mt-5">
                <div class="alert alert-success shadow-lg p-5 text-center rounded">
                    <h2 class="text-success mb-4">✅ Your Record Has Been Saved!</h2>
                    <p class="fs-5">Thank you for reaching out.</p>
                    <h3>Our team will connect with you as soon as possible. Please be patient.</h3>
                    <a href="/todolist" class="btn btn-primary mt-3">Go Back to To-Do List</a>
                </div>
            </div>
        </body>
        </html>
    ');

                } else {
                 return redirect('/todolist')->withInput()->withErrors($validator);
                }
    }


public function store(Request $request)
{
    // Sanitize mobile number before validation
    $cleaned_mobile = preg_replace('/[^0-9]/', '', $request->lead_mobile); // keep only digits
    // Keep only last 10 digits (Indian numbers)
    if (strlen($cleaned_mobile) > 10) {
        $cleaned_mobile = substr($cleaned_mobile, -10);
    }

    // Replace the raw input with sanitized version
    $request->merge(['lead_mobile' => $cleaned_mobile]);

    // Validate inputs
    $validator = Validator::make($request->all(), [
        'lead_title' => 'required',
        'lead_name' => 'required',
        'lead_mobile' => 'required|digits:10|unique:leads,lead_mobile',
        'lead_product' => 'required',
        'lead_disc' => 'required',
    ]);

    if ($validator->passes()) {
        $lead = new Lead;
        $lead->lead_title = $request->lead_title;
        $lead->lead_name = $request->lead_name;
        $lead->lead_mobile = $cleaned_mobile; // store sanitized version
        $lead->lead_city = $request->lead_city;
        $lead->lead_product = $request->lead_product;
        $lead->lead_disc = $request->lead_disc;
        $lead->lead_executive = $request->lead_executive;
        $lead->save();

        // Automatically add first follow-up
        $followup = new Followup;
        $followup->lead_id = $lead->id;
        $followup->followup_date = now();
        $followup->followup_remark = '0';
        $followup->save();

        return redirect('/followup_list')->with('message', 'The record has been saved successfully');
    } else {
        return redirect('/coldcall')->withInput()->withErrors($validator);
    }
}
    public function storelead_bycustomer(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'lead_title' => 'required|string|max:25',
            'lead_name' => 'required|string|max:155',
            'lead_mobile' => 'required|string|max:15',
            'lead_product' => 'required|string|max:100',
            'lead_disc' => 'required|string|max:300',
        ]);
            if ($validator->passes()) {

                $lead = new Lead;
                $lead->lead_title =$request->lead_title;
                $lead->lead_name = $request->lead_name;
                $lead->lead_mobile = $request->lead_mobile;
                $lead->lead_city = $request->lead_city;
                $lead->lead_product = $request->lead_product;
                $lead->lead_disc = $request->lead_disc;
                $lead->lead_executive = $request->lead_executive;

                 $lead->save();


                 $followup = new Followup;
                 // Assign lead_id after saving the lead
                 $followup->lead_id = $lead->id;
                 // Get current date
                 $followup->followup_date = date('Y-m-d H:i:s');
                 $followup->followup_remark = '0';
             
                 // Save the followup
                 $followup->save();
        
                 return view('callmanagement.thanks_page')->with('message', 'The record has been saved successfully');
                } else {
                 return redirect('/entry_by_customer')->withInput()->withErrors($validator);
                }

                



    }
 public function addfollowup($id)
    {

        $record= Followup::query()->where('lead_id', '=', $id)
        ->orderByDesc('followup_date')
        ->get();
 
        $record1= Lead::find($id);

        $login_name=auth::user()->name;

         return view('callmanagement.followup',['data'=>$record,
         'data1'=>$record1,'login_name'=>$login_name
    
           ]);

      }

    public function newfollowup(Request $request )
    {

        // echo"<pre>";
        // print_r($request->all());

        $validator= validator::make($request->all(),[
            'followup_remark' => 'required',
            'followup_date' => 'required',
            'lead_id' => 'required',
             
             ]);
            if ($validator->passes()) {

                


                 $followup = new Followup;



                 // Assign lead_id after saving the lead
                 $followup->lead_id =$request->lead_id ;
                 
                 // date format converion on yy-mmdd
                  $from_date=$request->followup_date;
                  $parsed_from_date = Carbon::createFromFormat('d-m-Y', $from_date);
                  $new_from_date = $parsed_from_date->format('Y-m-d');

                 $followup->followup_date = $new_from_date;
                 $followup->followup_remark =$request-> followup_remark;
             
                 // Save the followup
                 $followup->save();

$leadupdate = Lead::where('id', $request->lead_id)
    ->update(['lead_executive' => $request->lead_executive]);

$lead = Lead::find($request->lead_id);

// insertion of don=12 and cancel=1 otherwise 0
$af1 = $request->lead_af1;
$af2 = $request->lead_af2;

$lead->lead_af1 = $af1 === null ? 0 : $af1;
$lead->lead_af2 = $af2 === null ? 0 : $af2;

$lead->save();

        
                 return redirect('/followup_list')->with('message', 'The record has been saved successfully');
                } else {
                    return redirect()->back()->withInput()->withErrors($validator);

                }


        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function coldcall_register(Lead $lead)
    {
        $record=lead::get();
        return view('master.lead_dt',['data'=>$record]); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }


    public function followup()
    {


         return view('callmanagement.followup');
    }

    // public function followup_list()
    //  {    
    //     $currentDate = now()->toDateString();
    //    $record = Followup::getRecordsWithHighestIdForEachLead()
    //    ->whereDate('followup_date', $currentDate)
    //    ->orderBy('followup_date')
    //    ->get();
 
    //     // Pass data to the view
    //      $lead=Lead::all();
    //     //  $lead = Lead::where('lead_executive', Auth::user()->name)->get();
   

    //           return view('callmanagement.followup_list',['data'=>$record,
    //           'lead'=> $lead
    //           ]);

    //  }

public function followup_list(Request $request)
{
    // ✅ Define fixed date range: 30 days ago till today
    $today = now()->toDateString();
    $thirtyDaysAgo = now()->subDays(30)->toDateString();

    // ✅ Fetch followups within this range
    $record = Followup::getRecordsWithHighestIdForEachLead()
        ->whereBetween('followup_date', [$thirtyDaysAgo, $today])
        ->orderBy('followup_date', 'asc') // or 'desc' if you want latest first
        ->get();

    // ✅ Fetch all leads
    $lead = Lead::all();

    // ✅ Pass data to the view
    return view('callmanagement.followup_list', [
        'data' => $record,
        'lead' => $lead
    ]);
}




    public function followup_list_date_wise(Request $request)
    {    


        $from_date=$request->from_date;
        $parsed_from_date = Carbon::createFromFormat('d-m-Y', $from_date);
         $new_from_date = $parsed_from_date->format('Y-m-d');
         //form date
       
         
         $to_date=$request->to_date;
         $parsed_to_date = Carbon::createFromFormat('d-m-Y', $to_date);
          $new_to_date = $parsed_to_date->format('Y-m-d');
         //to date

         $record = Followup::getRecordsWithHighestIdForEachLead()
          ->whereBetween('followup_date', [$new_from_date, $new_to_date])
          ->orderBy('followup_date')
          ->get();
            $lead=Lead::all();
        return view('callmanagement.followup_list',['data'=>$record,
        'lead'=> $lead
        ]);








    }


}
