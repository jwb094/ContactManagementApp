<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/dashboard.css') }}">
    @endpush
    @section('title','Dashboard')
    @section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{--
    <style>
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
    </style>
  
    <style>
        /* Navbar */
        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1rem;
        }

        .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            /* height of navbar */
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #2470dc;
        }

        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
        }

        /* Main content */
        main {
            padding-top: 1.5rem;
        }

        /* Responsive sidebar */
        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
                opacity: 0;
            }
        }

        /* @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        } */

    </style>  --}}
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar " id="sidebar-menu">
                <div class="position-sticky pt-3">

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Orders
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Products
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Main content -->
            <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <h1 class="h2">Dashboard</h1>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Total Contacts</h5>
                                <p class="card-text">1,245</p>
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
