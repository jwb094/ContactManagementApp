<x-admin-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/dashboard.css') }}">
    @endpush
    @section('title','CSV')
    @section('content')


    <div class="container-fluid">
        <div class="row">


            @include('include.sidebar_menu')

            <!-- Main content -->
            <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <h1 class="h2">Dashboard</h1>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Import</h5>

                                <form action="">
                                    <input type="file" name="" id="">

                                    <button type="submit" class="btn btn-primary btn-sm"> <i class="bi bi-upload"></i>Import</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a class="btn btn-primary btn-sm " href="/admin/csv/contact_export">
                                    {{-- <p class="d-flex flex-row gap-5"> --}}
                                    <span class="d-flex align-items-center">

                                        <h5 class="card-title">Export</h5>
                                        <i class="bi bi-download"></i>
                                    </span>
                                    {{-- </p> --}}

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
    @endsection
</x-admin-layout>
