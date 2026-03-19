<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/multi-step-form.css') }}">
    @endpush
    @section('title','home')
    @section('content')

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            {{--<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar " id="sidebar-menu">
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
            </nav>--}}
            @include('include.sidebar_menu')

            <!-- Main content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <section id="form-container" class="w-96 md:w-1/2 lg:w-1/2 xl:w-1/2">

                    <div id="steps-bar">
                        <div class="step-indicator active">1</div>
                        <div class="step-indicator">2</div>
                        <div class="step-indicator">3</div>
                        <div class="step-indicator">4</div>
                    </div>
                    <form action="/employer/create" method="POST" id="multi-step">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                            <div class="step active">
                                <h2>Personal Info</h2>
                                <div class="form-floating mt-3">
                                    <select class="form-select" id="title" aria-label="Default select example">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Master">Master</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Prof">Professor</option>
                                        <option value="Sir">Sir</option>
                                    </select>
                                    <label for="title" class="form-label">Title</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="first_name" placeholder="John">
                                    <label for="first_name" class="form-label">First Name </label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="last_name" placeholder="Smith">
                                    <label for="last_name" class="form-label">Last Name</label>
                                </div>


                            </div>
                            <div class="step">
                                <h2>Contact Details</h2>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" placeholder="John">
                                    <label for="email" class="form-label">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone" placeholder="John">
                                    <label for="phone" class="form-label">Mobile </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" placeholder="John">
                                    <label for="email" class="form-label">Telephone </label>
                                </div>

                            </div>
                            <div class="step">
                                <h2>Address</h2>
                                <div class="form-floating mt-3">
                                    <input type="address_line_1" class="form-control" id="address_line_1">
                                    <label for="address_line_1">Address Line 1</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="address_line_2" class="form-control" id="address_line_2">
                                    <label for="address_line_2">Address Line 2</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="town_city" class="form-control" id="town_city">
                                    <label for="town_city">Town/City</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="country" class="form-control" id="country">
                                    <label for="country">Country</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="post_code" class="form-control" id="post_code">
                                    <label for="post_code">Post Code</label>
                                </div>
                            </div>
                            <div class="step">
                                <h2>Social Media Handle </h2>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="facebook" placeholder="">
                                    <label for="facebook" class="form-label">Facebook </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="twitter" placeholder="">
                                    <label for="twitter" class="form-label">X(formerly known as Twitter)</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="instagram" placeholder="">
                                    <label for="instagram" class="form-label">Instagram</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="linkedin" placeholder="">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="button" class="btn btn-info" id="previousBtn" onclick="prevStep()">Previous</button>
                                <button type="button" class="btn btn-success" id="nextBtn" onclick="nextStep()">Next</button>
                                <button class="btn btn-dark" type="submit" id="submitBtn" style="display: none;">submit</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
    @push('scripts')
    <script src="{{ URL::asset('js/multi-step-form.js') }}"></script>
    @endpush
    @endsection
</x-layout>
