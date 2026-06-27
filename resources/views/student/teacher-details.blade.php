@extends('layouts.app')

@section('title', 'Teacher Details')

@section('content')

<div class="container-fluid">

    <!-- Page Title -->
    <div class="mb-4">
        <h2>Teacher Profile</h2>
        <p class="text-muted">View teacher information and book an appointment.</p>
    </div>

    <div class="row">

        <!-- Left Side -->
        <div class="col-lg-4">

            <div class="card shadow">

                <img src="https://via.placeholder.com/350x350"
                     class="card-img-top"
                     alt="Teacher">

                <div class="card-body text-center">

                    <h3>John Smith</h3>

                    <span class="badge bg-primary">
                        Mathematics Teacher
                    </span>

                    <hr>

                    <h5 class="text-warning">
                        ⭐⭐⭐⭐⭐ 4.9
                    </h5>

                    <p>
                        <strong>120 Reviews</strong>
                    </p>

                    <button class="btn btn-success w-100">
                        Book Appointment
                    </button>

                </div>

            </div>

        </div>

        <!-- Right Side -->

        <div class="col-lg-8">

            <!-- About -->

            <div class="card shadow mb-4">

                <div class="card-header bg-primary text-white">

                    About Teacher

                </div>

                <div class="card-body">

                    <p>

                        John Smith is an experienced Mathematics teacher
                        with more than 8 years of teaching experience.
                        He specializes in Algebra, Calculus, Statistics,
                        and Competitive Exam Preparation.

                    </p>

                </div>

            </div>

            <!-- Qualification -->

            <div class="card shadow mb-4">

                <div class="card-header bg-success text-white">

                    Qualification

                </div>

                <div class="card-body">

                    <table class="table">

                        <tr>
                            <th>Degree</th>
                            <td>M.Sc Mathematics</td>
                        </tr>

                        <tr>
                            <th>University</th>
                            <td>Tribhuvan University</td>
                        </tr>

                        <tr>
                            <th>Experience</th>
                            <td>8 Years</td>
                        </tr>

                        <tr>
                            <th>Language</th>
                            <td>English, Nepali</td>
                        </tr>

                    </table>

                </div>

            </div>

            <!-- Subjects -->

            <div class="card shadow mb-4">

                <div class="card-header bg-info text-white">

                    Subjects

                </div>

                <div class="card-body">

                    <span class="badge bg-primary p-2">Algebra</span>

                    <span class="badge bg-success p-2">Calculus</span>

                    <span class="badge bg-danger p-2">Statistics</span>

                    <span class="badge bg-warning text-dark p-2">
                        Geometry
                    </span>

                </div>

            </div>

            <!-- Available Schedule -->

            <div class="card shadow mb-4">

                <div class="card-header bg-dark text-white">

                    Available Schedule

                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <thead>

                        <tr>

                            <th>Day</th>

                            <th>Time</th>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>

                            <td>Sunday</td>

                            <td>10:00 AM - 2:00 PM</td>

                        </tr>

                        <tr>

                            <td>Monday</td>

                            <td>9:00 AM - 4:00 PM</td>

                        </tr>

                        <tr>

                            <td>Tuesday</td>

                            <td>11:00 AM - 5:00 PM</td>

                        </tr>

                        <tr>

                            <td>Wednesday</td>

                            <td>9:00 AM - 3:00 PM</td>

                        </tr>

                        <tr>

                            <td>Thursday</td>

                            <td>10:00 AM - 1:00 PM</td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- Student Reviews -->

            <div class="card shadow mb-4">

                <div class="card-header bg-warning">

                    Student Reviews

                </div>

                <div class="card-body">

                    <div class="border rounded p-3 mb-3">

                        <h6>⭐⭐⭐⭐⭐ Anjali Tamang</h6>

                        <p>

                            Excellent teacher.
                            Explains every topic clearly.

                        </p>

                    </div>

                    <div class="border rounded p-3 mb-3">

                        <h6>⭐⭐⭐⭐⭐ Ramesh Sharma</h6>

                        <p>

                            Very helpful and friendly.
                            Highly recommended.

                        </p>

                    </div>

                    <div class="border rounded p-3">

                        <h6>⭐⭐⭐⭐☆ Sita Gurung</h6>

                        <p>

                            Great teaching style and easy to understand.

                        </p>

                    </div>

                </div>

            </div>

            <!-- Booking Form -->

            <div class="card shadow">

                <div class="card-header bg-success text-white">

                    Book Appointment

                </div>

                <div class="card-body">

                    <form>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label>Date</label>

                                <input type="date"
                                       class="form-control">

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Time</label>

                                <input type="time"
                                       class="form-control">

                            </div>

                        </div>

                        <div class="mb-3">

                            <label>Message</label>

                            <textarea
                                class="form-control"
                                rows="4"
                                placeholder="Write your message..."></textarea>

                        </div>

                        <button class="btn btn-success">

                            Confirm Booking

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection