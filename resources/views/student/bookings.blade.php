@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>My Bookings</h2>
            <p class="text-muted">View and manage your teacher bookings.</p>
        </div>

        <a href="/student/teachers" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> New Booking
        </a>
    </div>

    <!-- Search and Filter -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            Search Booking
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label>Teacher Name</label>
                        <input type="text" class="form-control" placeholder="Search Teacher">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Status</label>
                        <select class="form-select">
                            <option>All</option>
                            <option>Pending</option>
                            <option>Approved</option>
                            <option>Completed</option>
                            <option>Cancelled</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date</label>
                        <input type="date" class="form-control">
                    </div>

                </div>

                <button class="btn btn-primary">
                    <i class="bi bi-search"></i> Search
                </button>

            </form>

        </div>
    </div>

    <!-- Booking Table -->
    <div class="card shadow">

        <div class="card-header bg-success text-white">
            Booking List
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-light">

                <tr>
                    <th>#</th>
                    <th>Teacher</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                </thead>

                <tbody>

                <tr>
                    <td>1</td>
                    <td>John Smith</td>
                    <td>Mathematics</td>
                    <td>15 July 2026</td>
                    <td>10:00 AM</td>
                    <td>
                        <span class="badge bg-warning">Pending</span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">
                            View
                        </button>

                        <button class="btn btn-danger btn-sm">
                            Cancel
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Emily Johnson</td>
                    <td>English</td>
                    <td>20 July 2026</td>
                    <td>1:30 PM</td>
                    <td>
                        <span class="badge bg-success">Approved</span>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm">
                            View
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>David Wilson</td>
                    <td>Computer Science</td>
                    <td>05 July 2026</td>
                    <td>9:00 AM</td>
                    <td>
                        <span class="badge bg-primary">Completed</span>
                    </td>
                    <td>
                        <button class="btn btn-secondary btn-sm">
                            Review
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Sophia Brown</td>
                    <td>Physics</td>
                    <td>30 June 2026</td>
                    <td>11:00 AM</td>
                    <td>
                        <span class="badge bg-danger">Cancelled</span>
                    </td>
                    <td>-</td>
                </tr>

                </tbody>

            </table>

        </div>

    </div>

    <!-- Summary Cards -->
    <div class="row mt-4">

        <div class="col-md-3">
            <div class="card shadow text-center p-3">
                <h5>Total Bookings</h5>
                <h2>12</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center p-3">
                <h5>Approved</h5>
                <h2 class="text-success">5</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center p-3">
                <h5>Pending</h5>
                <h2 class="text-warning">3</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center p-3">
                <h5>Completed</h5>
                <h2 class="text-primary">4</h2>
            </div>
        </div>

    </div>

</div>

@endsection