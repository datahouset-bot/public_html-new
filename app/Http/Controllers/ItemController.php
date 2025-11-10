<?php

namespace App\Http\Controllers;
use App\Models\item;
use App\Models\company;
use App\Models\itemgroup;

use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }

    
    public function index()
    {
        $record=item::all();
        return view('master.item',['data'=>$record]);

        //  return view('master.item');
    }

    public function itemform()
    {
           $company = company::all();
          $itemgroup = itemgroup::all();
        
        //  return view("entery.amcform", [
        //      'accountdata' => $accounts,
        //       'itemdata' => $items
        //  ]);
    
        return view ('master.itemform',[
            'companydata'=>$company,
            'itemgroupdata'=>$itemgroup,
    ]);
    }

    public function insertitem(Request $request)
    {

        
        $validator= validator::make($request->all(),[
            'item_name' => 'required|unique:items',
            'company' => 'required',
            'group' => 'required',
            'mrp' => 'required|numeric',
            'sale_rate' => 'required|numeric',
            'unit' => 'required']);
        // echo"<pre>";
        // print_r($request->all());
        if($validator->passes())
          {
              $item=new item;
               $item->item_name=$request->item_name;
               $item->company=$request->company;
               $item->group=$request->group;
               $item->mrp=$request->mrp;
               $item->sale_rate=$request->sale_rate;
               $item->unit=$request->unit;
               $item->save();
               return redirect('item');
           }

           else{
            return redirect('/itemform')->withInput()->withErrors($validator);
        
              }

 

    }

    public function itemformview($id)
    {      
        $record= item::find($id);

        return view('master.itemformview',['data'=>$record]);
      
    }

    public function show_item_form_edit($id)
    {      
        $record= item::find($id);

        return view('master.itemformedit',['data'=>$record]);

    }
    public function edit_item(Request $request)
    {
        // this is use for save the record of edited item 
         $validator= validator::make($request->all(),[
            'item_name' => 'required',
            'company' => 'required',
            'group' => 'required',
            'mrp' => 'required|numeric',
            'sale_rate' => 'required|numeric',
            'unit' => 'required']);
        // echo"<pre>";
        // print_r($request->all());
        if($validator->passes())
          {
              $item=item::find($request->id);
               $item->item_name=$request->item_name;
               $item->company=$request->company;
               $item->group=$request->group;
               $item->mrp=$request->mrp;
               $item->sale_rate=$request->sale_rate;
               $item->unit=$request->unit;
               $item->update();
               return redirect('item');
           }

          else{
            return redirect('/itemform')->withInput()->withErrors($validator);
              } 
    }               

    public function destroy(item $item,$id)

    {
        item::destroy(['id',$id]);         
        return redirect('item');

        //
    }   

   
       
}
