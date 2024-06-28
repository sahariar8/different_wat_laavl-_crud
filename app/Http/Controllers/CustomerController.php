<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.pages.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('customer.pages.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       #system-1
    //    $customer = new Customer();
    //    $customer->name = $request->name;
    //    $customer->email = $request->email;
    //    $customer->phone = $request->phone;
    //    $customer->address = $request->address;
    //    $customer->save();
    //    return redirect()->back();

        #system-2 
        Customer::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,
        ]);

       session()->flash('success', 'Customer created successfully!');
       return redirect()->route('customer.index');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
    
       return view('customer.pages.detail',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
       return view('customer.pages.form',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {

        // opt-2
        // Customer::where('id',$customer->id)->update([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'phone'=>$request->phone,
        //     'address'=>$request->address,
        // ]);
        // opt-3
       $customer->update($request->all());
       return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
       $customer->delete();
       return redirect()->route('customer.index');
    }
}
