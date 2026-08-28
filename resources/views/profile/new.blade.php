@extends('layouts.admin-layout')
    @push('styles')

    @endpush
    @section('title','home')
    @section('content')

    <section class="form-signin w-100 m-auto">
        <form action="/register" method="POST">
            <h1 class="h3 mb-3 fw-normal text-center"> REgister</h1>


        </form>
    </section>


    @endsection

