@extends('layouts.app')

@section('content')

<h2 class="mb-4">Add Customer</h2>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <div class="mb-3">
    <label class="form-label">Full Name</label>

    <input
        type="text"
        name="full_name"
        class="form-control @error('full_name') is-invalid @enderror"
        value="{{ old('full_name') }}"
    >

    @error('full_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

    <div class="mb-3">
    <label class="form-label">Email</label>

    <input
        type="email"
        name="email"
        class="form-control @error('email') is-invalid @enderror"
        value="{{ old('email') }}"
    >

    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

   <div class="mb-3">
    <label class="form-label">Phone</label>

    <input
        type="text"
        name="phone"
        class="form-control @error('phone') is-invalid @enderror"
        value="{{ old('phone') }}"
    >

    @error('phone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

   <div class="mb-3">
    <label class="form-label">Address</label>

    <textarea
        name="address"
        class="form-control @error('address') is-invalid @enderror"
        rows="4">{{ old('address') }}</textarea>

    @error('address')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

    <button type="submit" class="btn btn-success">
        Save Customer
    </button>

    <a href="{{ route('customers.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection