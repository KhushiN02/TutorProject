@extends('layouts.app')

@section('content')

<h3 class="mb-4">Student Dashboard</h3>

<div class="row">

    <div class="col-md-4">
        <div class="card p-4 text-center">
            <i class="bi bi-people fs-2 text-primary"></i>
            <h5 class="mt-2">Teachers</h5>
            <h3>10</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 text-center">
            <i class="bi bi-calendar-check fs-2 text-success"></i>
            <h5 class="mt-2">Bookings</h5>
            <h3>5</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 text-center">
            <i class="bi bi-bar-chart fs-2 text-warning"></i>
            <h5 class="mt-2">Reports</h5>
            <h3>2</h3>
        </div>
    </div>

</div>

@endsection