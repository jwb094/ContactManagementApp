@extends('layouts.admin-layout')
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }}">
    @endpush
    @section('title','Import CSV')
    @section('content')


    <div class="container-fluid">
        <div class="row">


            @include('include.sidebar_menu')

            <!-- Main content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <section class="form-signin w-100 m-auto">

                </section>
            </div>
        </div>
    </div>


    @endsection

