<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Customer Management System')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{ route('customers.index') }}">
            <div class="fw-bold fs-4">
                Customer Management
            </div>
            <small class="text-light">
                Laravel CRUD Application
            </small>
        </a>

        <div class="ms-auto">
            <a href="{{ route('customers.index') }}" class="btn btn-outline-light btn-sm me-2">
                Customers
            </a>

            <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm">
                + Add Customer
            </a>
        </div>

    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<body class="bg-light">
</html>