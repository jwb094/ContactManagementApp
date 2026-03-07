<x-layout>
    @push('styles')

    @endpush
    @section('title','home')
    @section('content')

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
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <section class="form-signin w-100 m-auto">
                    <form action="/register" method="POST">
                        <h1 class="h3 mb-3 fw-normal text-center"> REgister</h1>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Jonthan">
                            <label for="floatingInput">First Name</label> </div>
                        <div class="form-floating">

                            <input type="text" class="form-control" id="floatingPassword" placeholder="Luthor">
                            <label for="floatingPassword">Last Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label> </div>
                        <div class="form-floating">

                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Sign in</button>

                    </form>
                </section>
            </div>
        </div>
    </div>


    @endsection
</x-layout>
