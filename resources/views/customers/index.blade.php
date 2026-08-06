@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Customers</h2>

    <a href="{{ route('customers.create') }}" class="btn btn-primary">
        Add Customer
    </a>
</div>

<div class="alert alert-info">
    Customer list will appear here.
</div>

@endsection