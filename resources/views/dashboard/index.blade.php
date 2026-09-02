@extends('layouts.admin-layout')
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/dashboard.css') }}">
    @endpush
    @section('title','Dashboard')
    @section('content')
    <div class="container-fluid p-4">

        <!-- Page Header -->

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">

            <div>
                <h1 class="h3 mb-1">
                    Dashboard
                </h1>

                <p class="text-muted mb-0">
                    Welcome back, Admin.
                </p>
            </div>

            <button class="btn btn-primary mt-3 mt-md-0">
                + Add New
            </button>

        </div>


        <!-- ==========================================
             Statistics
        ========================================== -->

        <div class="row g-4 mb-4">

            <div class="col-12 col-sm-6 col-xl-3">

                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">

                        <p class="text-muted mb-2">
                            Total Users
                        </p>

                        <h2 class="h3 mb-0">
                            1,248
                        </h2>

                        <small class="text-success">
                            ↑ 12.5% this month
                        </small>

                    </div>
                </div>

            </div>


            <div class="col-12 col-sm-6 col-xl-3">

                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">

                        <p class="text-muted mb-2">
                            Total Posts
                        </p>

                        <h2 class="h3 mb-0">
                            356
                        </h2>

                        <small class="text-success">
                            ↑ 8.2% this month
                        </small>

                    </div>
                </div>

            </div>


            <div class="col-12 col-sm-6 col-xl-3">

                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">

                        <p class="text-muted mb-2">
                            Active Jobs
                        </p>

                        <h2 class="h3 mb-0">
                            84
                        </h2>

                        <small class="text-success">
                            ↑ 5.4% this month
                        </small>

                    </div>
                </div>

            </div>


            <div class="col-12 col-sm-6 col-xl-3">

                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">

                        <p class="text-muted mb-2">
                            Revenue
                        </p>

                        <h2 class="h3 mb-0">
                            £12,450
                        </h2>

                        <small class="text-danger">
                            ↓ 2.1% this month
                        </small>

                    </div>
                </div>

            </div>

        </div>


        <!-- ==========================================
             Dashboard Content
        ========================================== -->

        <div class="row g-4">

            <!-- Recent Activity -->

            <div class="col-12 col-xl-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white py-3">
                        <h2 class="h5 mb-0">
                            Recent Activity
                        </h2>
                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>User</th>
                                        <th>Activity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>John Smith</td>
                                        <td>Created an account</td>
                                        <td>Today</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Sarah Jones</td>
                                        <td>Published a post</td>
                                        <td>Yesterday</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                Published
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>David Brown</td>
                                        <td>Updated profile</td>
                                        <td>Yesterday</td>
                                        <td>
                                            <span class="badge text-bg-primary">
                                                Updated
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Emma Wilson</td>
                                        <td>Submitted application</td>
                                        <td>2 days ago</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Quick Actions -->

            <div class="col-12 col-xl-4">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white py-3">
                        <h2 class="h5 mb-0">
                            Quick Actions
                        </h2>
                    </div>

                    <div class="card-body">

                        <div class="d-grid gap-2">

                            <a href="#" class="btn btn-primary">
                                Add User
                            </a>

                            <a href="#" class="btn btn-outline-primary">
                                Create Post
                            </a>

                            <a href="#" class="btn btn-outline-primary">
                                Manage Jobs
                            </a>

                            <a href="#" class="btn btn-outline-secondary">
                                View Reports
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    @endsection

