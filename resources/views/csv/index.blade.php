@extends('layouts.admin-layout')
@push('styles')
<link rel="stylesheet" href=" {{ URL::asset('css/dashboard.css') }}">
@endpush
@section('title','CSV')
@section('content')


<div class="container-fluid">
    <div class="row">



        <!-- Main content -->
        <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <h1 class="h2">CSV Import  / Export</h1>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Import</h5>

                            <form action={{ route('admin.csv.import') }} method="POST" enctype="multipart/form-data">
                                @csrf
                                <x-form.form-label for="import_data_file" class="form-label"> File Name</x-form.form-label>
                                <x-form.form-input type="file" class="form-control col-md-2" name="import_data_file"></x-form.form-input>

                                <button type="submit" class="btn btn-primary btn-sm"> <i class="bi bi-upload"></i>Import</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <a class="btn btn-primary btn-sm " href={{ route('admin.csv.export_page') }}>
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
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </section>

    </div>
</div>
@endsection
