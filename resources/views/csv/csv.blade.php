<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/dashboard.css') }}">
    @endpush
    @section('title','CSV')
    @section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
                                <i class="bi bi-upload"></i>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Export</h5>
                                <i class="bi bi-download"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
    @endsection
</x-layout>
