@extends('layouts.app')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Customers</h2>

    <a href="{{ route('customers.create') }}" class="btn btn-primary">
        Add Customer
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th width="180">Actions</th>
        </tr>
    </thead>

    <tbody>

    @forelse($customers as $customer)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->address }}</td>

            <td>

                <a href="{{ route('customers.edit', $customer->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('customers.destroy', $customer->id) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

    @empty

        <tr>
            <td colspan="6" class="text-center">
                No customers found.
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection