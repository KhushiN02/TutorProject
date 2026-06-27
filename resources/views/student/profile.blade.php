@extends('layouts.app')

@section('title','Settings')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">
        Account Settings
    </h2>

    <div class="card shadow">

        <div class="card-header bg-dark text-white">

            Settings

        </div>

        <div class="card-body">

            <form>

                <div class="form-check form-switch mb-3">

                    <input class="form-check-input"
                        type="checkbox"
                        checked>

                    <label class="form-check-label">

                        Email Notifications

                    </label>

                </div>

                <div class="form-check form-switch mb-3">

                    <input class="form-check-input"
                        type="checkbox">

                    <label class="form-check-label">

                        SMS Notifications

                    </label>

                </div>

                <div class="mb-3">

                    <label>Language</label>

                    <select class="form-select">

                        <option>English</option>

                        <option>Nepali</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Theme</label>

                    <select class="form-select">

                        <option>Light</option>

                        <option>Dark</option>

                    </select>

                </div>

                <button class="btn btn-success">

                    Save Settings

                </button>

            </form>

        </div>

    </div>

</div>

@endsection