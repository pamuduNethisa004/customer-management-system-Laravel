@extends('layouts.app')

@section('content')

@section('title', 'Edit Customer')

<h2 class="mb-4">Edit Customer</h2>

<form action="{{ route('customers.update', $customer->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input
            type="text"
            name="full_name"
            class="form-control"
            value="{{ old('full_name', $customer->full_name) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input
            type="email"
            name="email"
            class="form-control"
            value="{{ old('email', $customer->email) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input
            type="text"
            name="phone"
            class="form-control"
            value="{{ old('phone', $customer->phone) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <textarea
            name="address"
            rows="4"
            class="form-control">{{ old('address', $customer->address) }}</textarea>
    </div>
    
    <div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-control">
        <option value="Active" {{ $customer->status == 'Active' ? 'selected' : '' }}>
            Active
        </option>

        <option value="Inactive" {{ $customer->status == 'Inactive' ? 'selected' : '' }}>
            Inactive
        </option>
    </select>
    </div>

    <button class="btn btn-primary">
        Update Customer
    </button>

    <a href="{{ route('customers.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection