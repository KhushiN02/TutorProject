@extends('layouts.app')

@section('title','Reports')

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h2>Student Reports</h2>
        <p class="text-muted">Track your booking activities and learning progress.</p>
    </div>

    <!-- Statistics Cards -->

    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card shadow text-center p-4">

                <i class="bi bi-calendar-check display-5 text-primary"></i>

                <h5 class="mt-3">Total Bookings</h5>

                <h2>20</h2>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card shadow text-center p-4">

                <i class="bi bi-check-circle display-5 text-success"></i>

                <h5 class="mt-3">Completed</h5>

                <h2>15</h2>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card shadow text-center p-4">

                <i class="bi bi-clock-history display-5 text-warning"></i>

                <h5 class="mt-3">Pending</h5>

                <h2>3</h2>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card shadow text-center p-4">

                <i class="bi bi-x-circle display-5 text-danger"></i>

                <h5 class="mt-3">Cancelled</h5>

                <h2>2</h2>

            </div>

        </div>

    </div>

    <!-- Monthly Report -->

    <div class="card shadow mb-4">

        <div class="card-header bg-primary text-white">

            Monthly Booking Summary

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-light">

                    <tr>
                        <th>Month</th>
                        <th>Total</th>
                        <th>Completed</th>
                        <th>Pending</th>
                        <th>Cancelled</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>January</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>February</td>
                        <td>4</td>
                        <td>4</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>March</td>
                        <td>5</td>
                        <td>4</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>April</td>
                        <td>3</td>
                        <td>2</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>May</td>
                        <td>5</td>
                        <td>3</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    <!-- Learning Progress -->

    <div class="row">

        <div class="col-md-6">

            <div class="card shadow mb-4">

                <div class="card-header bg-success text-white">

                    Learning Summary

                </div>

                <div class="card-body">

                    <table class="table">

                        <tr>
                            <th>Total Study Hours</th>
                            <td>120 Hours</td>
                        </tr>

                        <tr>
                            <th>Favorite Subject</th>
                            <td>Mathematics</td>
                        </tr>

                        <tr>
                            <th>Favorite Teacher</th>
                            <td>John Smith</td>
                        </tr>

                        <tr>
                            <th>Average Rating Given</th>
                            <td>4.8 / 5</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card shadow mb-4">

                <div class="card-header bg-info text-white">

                    Achievement

                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">
                            ✅ Completed 15 Classes
                        </li>

                        <li class="list-group-item">
                            ⭐ Top Rated Student
                        </li>

                        <li class="list-group-item">
                            📚 120 Study Hours
                        </li>

                        <li class="list-group-item">
                            🏆 Excellent Attendance
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection