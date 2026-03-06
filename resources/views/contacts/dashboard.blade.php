<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/dashboard.css') }}">
    @endpush
    @section('title','Dashboard')
    @section('content')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .full-height {
            height: 100vh;
            /* Make the flex container full viewport height */
        }

        .sidebar {
            width: 250px;
            height: 100%;
            /* Full height of parent flex container */
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            background: #0d6efd;
            color: white;
        }

        section {
            overflow-y: auto;
            /* Scroll content if it overflows */
        }

    </style> --}}


    <div class="row">
        <div class="d-flex full-height">

            <!-- Sidebar -->
            <nav class="sidebar bg-primary  h-100">

                <h4 class="mb-4">Dashboard</h4>

                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/tags">Manage Tags</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/profile">My Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/CSV">CSV</a>
                    </li>

                </ul>

            </nav>

            <!-- Main Content -->
            <section class="flex-grow-1 p-4 bg-body-tertiary">

                <h2 class="mb-4">Dashboard</h2>

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Total Contacts</h5>
                                <p class="card-text">1,245 </p>
                                <a class="btn btn-primary btn-sm" href="">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">New contacts This Month</h5>
                                <p class="card-text">$24,500 this month</p>
                                <button class="btn btn-primary btn-sm">View</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Recently Added Contacts</h5>
                                <p class="card-text">320 new orders</p>
                                <button class="btn btn-primary btn-sm">View</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Upcoming Birthdays</h5>
                                <p>Recent user activity will appear here.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Favourite Contacts</h5>
                                <p>Charts or stats could go here.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Quick Add Contact</h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Statistics</h5>
                                <p>Charts or stats could go here.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>
    </div>

    @endsection
</x-layout>
