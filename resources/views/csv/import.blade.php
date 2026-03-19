<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }}">
    @endpush
    @section('title','Import CSV')
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
                <section class="form-signin w-100 m-auto">

                </section>
            </div>
        </div>
    </div>


    @endsection
</x-layout>
