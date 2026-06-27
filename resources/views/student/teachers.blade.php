@extends('layouts.app')

@section('title', 'Teachers')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Find a Teacher</h2>
            <p class="text-muted">Search and book your preferred teacher.</p>
        </div>
    </div>

    <!-- Search Filter -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            Search Teacher
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Subject</label>
                        <select class="form-select">
                            <option>All Subjects</option>
                            <option>Mathematics</option>
                            <option>Science</option>
                            <option>English</option>
                            <option>Computer</option>
                            <option>Physics</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" placeholder="Enter location">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Minimum Rating</label>
                        <select class="form-select">
                            <option>All Ratings</option>
                            <option>★★★★★</option>
                            <option>★★★★☆ & Above</option>
                            <option>★★★☆☆ & Above</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Experience</label>
                        <select class="form-select">
                            <option>Any</option>
                            <option>1-3 Years</option>
                            <option>3-5 Years</option>
                            <option>5-10 Years</option>
                            <option>10+ Years</option>
                        </select>
                    </div>

                </div>

                <button class="btn btn-primary">
                    <i class="bi bi-search"></i> Search
                </button>

                <button class="btn btn-secondary">
                    Reset
                </button>

            </form>

        </div>

    </div>

    <!-- Teacher Cards -->

    <div class="row">

        <!-- Teacher 1 -->

        <div class="col-lg-4 mb-4">

            <div class="card shadow h-100">

                <img src="https://via.placeholder.com/400x250"
                     class="card-img-top">

                <div class="card-body">

                    <h4>John Smith</h4>

                    <span class="badge bg-primary">
                        Mathematics
                    </span>

                    <p class="mt-3">

                        <strong>Qualification:</strong><br>

                        M.Sc Mathematics

                    </p>

                    <p>

                        <strong>Experience:</strong>

                        8 Years

                    </p>

                    <p>

                        ⭐⭐⭐⭐⭐ (4.9)

                    </p>

                    <p>

                        120 Reviews

                    </p>

                </div>

                <div class="card-footer bg-white">

                    <a href="/student/teacher-details"
                       class="btn btn-outline-primary">

                        View Profile

                    </a>

                    <button class="btn btn-success">

                        Book Now

                    </button>

                </div>

            </div>

        </div>

        <!-- Teacher 2 -->

        <div class="col-lg-4 mb-4">

            <div class="card shadow h-100">

                <img src="https://via.placeholder.com/400x250"
                     class="card-img-top">

                <div class="card-body">

                    <h4>Emily Johnson</h4>

                    <span class="badge bg-success">

                        English

                    </span>

                    <p class="mt-3">

                        <strong>Qualification:</strong><br>

                        M.A English

                    </p>

                    <p>

                        <strong>Experience:</strong>

                        6 Years

                    </p>

                    <p>

                        ⭐⭐⭐⭐☆ (4.7)

                    </p>

                    <p>

                        95 Reviews

                    </p>

                </div>

                <div class="card-footer bg-white">

                    <a href="/student/teacher-details"
                       class="btn btn-outline-primary">

                        View Profile

                    </a>

                    <button class="btn btn-success">

                        Book Now

                    </button>

                </div>

            </div>

        </div>

        <!-- Teacher 3 -->

        <div class="col-lg-4 mb-4">

            <div class="card shadow h-100">

                <img src="https://via.placeholder.com/400x250"
                     class="card-img-top">

                <div class="card-body">

                    <h4>David Wilson</h4>

                    <span class="badge bg-danger">

                        Computer Science

                    </span>

                    <p class="mt-3">

                        <strong>Qualification:</strong><br>

                        M.Tech Computer

                    </p>

                    <p>

                        <strong>Experience:</strong>

                        10 Years

                    </p>

                    <p>

                        ⭐⭐⭐⭐⭐ (5.0)

                    </p>

                    <p>

                        210 Reviews

                    </p>

                </div>

                <div class="card-footer bg-white">

                    <a href="/student/teacher-details"
                       class="btn btn-outline-primary">

                        View Profile

                    </a>

                    <button class="btn btn-success">

                        Book Now

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection