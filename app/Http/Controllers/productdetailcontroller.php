<?php

namespace App\Http\Controllers;

use App\Models\productdetail;
use Illuminate\Http\Request;

class productdetailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=productdetail::get();
        return view('entery.productdetail_index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('entery.productdetail_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
         $validated = $request->validate([
            'productname'   => 'required|string|max:255',
            'productcompany'   => 'required|string|max:255',
            'productuse'    => 'nullable|string|max:255',
            'MRP'=>'nullable|integer',
            'saleprice'     => 'nullable|integer',
            'minsaleprice'  => 'nullable|integer',
            'customerprice' => 'nullable|integer',
            'dealerprice'=>'nullable|integer',
            'dscription'=>'nullable|string|max:255',
            'usertype'=>'nullable|string',
            'arc'=>'nullable|integer',
            
            

        ]);
        ProductDetail::create($validated);

        return redirect()->route('productdetail.index')
                         ->with('success', 'Product created successfully!');
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
        $product = ProductDetail::findOrFail($id);
        return view('entery.productdetail_edit', compact('product'));
    }

     public function update(Request $request, $id)
    {
        $request->validate([
            'productname'   => 'required|string|max:255',
            'productcompany'=> 'required|string|max:255',
            'productuse'    => 'nullable|string',
            'MRP'           => 'nullable|numeric',
            'saleprice'     => 'nullable|numeric',
            'minsaleprice'  => 'nullable|numeric',
            'customerprice' => 'nullable|numeric',
            'dealerprice'   => 'nullable|numeric',
            'discription'   => 'nullable|string',
            'usertype'      => 'nullable|string',
            'arc'           => 'nullable|string'
        ]);

        $product = ProductDetail::findOrFail($id);

        $product->update([
            'productname'   => $request->productname,
            'productcompany'=> $request->productcompany,
            'productuse'    => $request->productuse,
            'MRP'           => $request->MRP,
            'saleprice'     => $request->saleprice,
            'minsaleprice'  => $request->minsaleprice,
            'customerprice' => $request->customerprice,
            'dealerprice'   => $request->dealerprice,
            'discription'   => $request->discription,
            'usertype'      => $request->usertype,
            'arc'           => $request->arc,
        ]);

        return redirect()
            ->route('productdetail.index')
            ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productdetail $productdetail)
    {
       
        $productdetail->delete();

        return redirect()->route('productdetail.index')
                         ->with('success', 'Product deleted successfully!');
    
    }
}
