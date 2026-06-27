@extends('layouts.app')

@section('title', 'Request Teacher')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col">
            <h2>Request a Teacher</h2>
            <p class="text-muted">
                Can't find your preferred teacher? Submit a request and we'll help you find one.
            </p>
        </div>
    </div>

    <div class="row">

        <!-- Request Form -->
        <div class="col-lg-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    Teacher Request Form
                </div>

                <div class="card-body">

                    <form action="#" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Preferred Teacher Name</label>
                                <input type="text" class="form-control"
                                    placeholder="Enter teacher name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Subject</label>
                                <select class="form-select">
                                    <option>Select Subject</option>
                                    <option>Mathematics</option>
                                    <option>English</option>
                                    <option>Computer Science</option>
                                    <option>Physics</option>
                                    <option>Chemistry</option>
                                    <option>Biology</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Qualification</label>
                                <input type="text" class="form-control"
                                    placeholder="Preferred qualification">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control"
                                    placeholder="Preferred location">
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teaching Mode</label>

                            <select class="form-select">
                                <option>Online</option>
                                <option>Offline</option>
                                <option>Both</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Preferred Date</label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Additional Requirements</label>

                            <textarea class="form-control"
                                      rows="5"
                                      placeholder="Describe your requirements..."></textarea>
                        </div>

                        <button class="btn btn-primary">
                            <i class="bi bi-send"></i>
                            Submit Request
                        </button>

                        <button type="reset"
                                class="btn btn-secondary">
                            Reset
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- Right Panel -->

        <div class="col-lg-4">

            <div class="card shadow mb-4">

                <div class="card-header bg-success text-white">
                    Tips
                </div>

                <div class="card-body">

                    <ul>

                        <li>Provide the teacher's full name if known.</li>

                        <li>Select the correct subject.</li>

                        <li>Mention your preferred location.</li>

                        <li>Add qualification requirements.</li>

                        <li>Describe your learning goals.</li>

                    </ul>

                </div>

            </div>

            <div class="card shadow">

                <div class="card-header bg-warning">
                    Request Status
                </div>

                <div class="card-body">

                    <table class="table">

                        <tr>
                            <th>Total Requests</th>
                            <td>4</td>
                        </tr>

                        <tr>
                            <th>Approved</th>
                            <td>2</td>
                        </tr>

                        <tr>
                            <th>Pending</th>
                            <td>1</td>
                        </tr>

                        <tr>
                            <th>Rejected</th>
                            <td>1</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection