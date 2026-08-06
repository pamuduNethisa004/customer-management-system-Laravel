@extends('layouts.app')

@section('content')

<h2 class="mb-4">Add Customer</h2>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success">
        Save Customer
    </button>

    <a href="{{ route('customers.index') }}" class="btn btn-secondary">
        Cancel
    </a>
</form>

@endsection