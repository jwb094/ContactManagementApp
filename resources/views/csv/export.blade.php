@extends('layouts.admin-layout')
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }}">
    @endpush
    @section('title','Export Contact Database')
    @section('content')


    {{-- <div class="container-fluid">
        <div class="row">

            @include('include.sidebar_menu')

            <!-- Main content -->
            <div class="col-md-9 mx-sm-auto col-lg-10 px-md-4">
                <section class="form-signin w-100 m-auto">

                </section>
            </div>
        </div>
    </div> --}}
        <div class="container-fluid">
        <div class="row">



            <!-- Main content -->
            <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <h1 class="h2">Export</h1>

                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                          

                                <form action="">
                                    
                                    <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-sm"> <i class="bi bi-upload"></i>Export</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>

    @endsection

