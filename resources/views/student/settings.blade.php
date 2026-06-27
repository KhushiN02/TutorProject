@extends('layouts.app')

@section('title', 'Settings')

@section('content')

<div class="container-fluid">

    <div class="row mb-4">
        <div class="col">
            <h2>Account Settings</h2>
            <p class="text-muted">Manage your account preferences and security.</p>
        </div>
    </div>

    <div class="row">

        <!-- Settings Form -->
        <div class="col-lg-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    Settings
                </div>

                <div class="card-body">

                    <form action="#" method="POST">

                        @csrf

                        <!-- Notifications -->
                        <h5 class="mb-3">Notifications</h5>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="emailNotification"
                                   checked>
                            <label class="form-check-label" for="emailNotification">
                                Email Notifications
                            </label>
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="smsNotification">
                            <label class="form-check-label" for="smsNotification">
                                SMS Notifications
                            </label>
                        </div>

                        <div class="form-check form-switch mb-4">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="bookingReminder"
                                   checked>
                            <label class="form-check-label" for="bookingReminder">
                                Booking Reminder
                            </label>
                        </div>

                        <hr>

                        <!-- Language -->

                        <h5 class="mb-3">Language</h5>

                        <div class="mb-4">

                            <select class="form-select">

                                <option selected>English</option>
                                <option>Nepali</option>

                            </select>

                        </div>

                        <hr>

                        <!-- Theme -->

                        <h5 class="mb-3">Theme</h5>

                        <div class="mb-4">

                            <select class="form-select">

                                <option selected>Light Mode</option>
                                <option>Dark Mode</option>

                            </select>

                        </div>

                        <hr>

                        <!-- Privacy -->

                        <h5 class="mb-3">Privacy</h5>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input"
                                   type="checkbox"
                                   checked
                                   id="profileVisible">

                            <label class="form-check-label"
                                   for="profileVisible">

                                Make My Profile Visible

                            </label>
                        </div>

                        <div class="form-check form-switch mb-4">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="shareActivity">

                            <label class="form-check-label"
                                   for="shareActivity">

                                Share Learning Activity

                            </label>
                        </div>

                        <hr>

                        <!-- Password -->

                        <h5 class="mb-3">Change Password</h5>

                        <div class="mb-3">

                            <label>Current Password</label>

                            <input type="password"
                                   class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>New Password</label>

                            <input type="password"
                                   class="form-control">

                        </div>

                        <div class="mb-4">

                            <label>Confirm Password</label>

                            <input type="password"
                                   class="form-control">

                        </div>

                        <button type="submit"
                                class="btn btn-primary">

                            <i class="bi bi-check-circle"></i>

                            Save Settings

                        </button>

                        <button type="reset"
                                class="btn btn-secondary">

                            Reset

                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- Right Sidebar -->

        <div class="col-lg-4">

            <div class="card shadow mb-4">

                <div class="card-header bg-success text-white">
                    Account Information
                </div>

                <div class="card-body">

                    <p><strong>Name:</strong> Anjali Tamang</p>

                    <p><strong>Email:</strong> anjali@gmail.com</p>

                    <p><strong>Role:</strong> Student</p>

                    <p><strong>Status:</strong>
                        <span class="badge bg-success">Active</span>
                    </p>

                </div>

            </div>

            <div class="card shadow">

                <div class="card-header bg-danger text-white">
                    Danger Zone
                </div>

                <div class="card-body">

                    <p class="text-muted">
                        Deleting your account is permanent and cannot be undone.
                    </p>

                    <button class="btn btn-danger w-100">
                        Delete Account
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection