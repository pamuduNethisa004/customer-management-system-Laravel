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
    $customers = Customer::latest()->get();

    return view('customers.index', compact('customers'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('customers.create');
    }

public function store(Request $request)
{
    $validated = $request->validate([
    'full_name' => 'required|max:255',
    'email' => 'required|email|unique:customers,email',
    'phone' => 'required|max:20',
    'address' => 'required',
    'status' => 'required|in:Active,Inactive',
    ]);

    Customer::create($validated);

    return redirect()
        ->route('customers.index')
        ->with('success', 'Customer added successfully.');
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
    public function edit(Customer $customer)
    {
    return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
   $validated = $request->validate([
    'full_name' => 'required|max:255',
    'email' => 'required|email|unique:customers,email,' . $customer->id,
    'phone' => 'required|max:20',
    'address' => 'required',
    'status' => 'required|in:Active,Inactive',
    ]);

    $customer->update($validated);

    return redirect()
        ->route('customers.index')
        ->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Customer $customer)
    {
    $customer->delete();

    return redirect()
        ->route('customers.index')
        ->with('success', 'Customer deleted successfully.');
    }
}
