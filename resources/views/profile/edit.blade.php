@extends('layouts.admin-layout')
    @push('styles')

    @endpush
    @section('title','Edit Profile')
    @section('content')

    <div class="container-fluid">
        <div class="row">


            <!-- Main content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <section class="form-signin col-md-9 m-auto">
                    <h1 class="h2 mb-3 fw-normal text-center my-4"> Profile Information   </h1>
                    <form action="/update" method="POST" class="profile_information" id="profile_information">
                        <div class="d-flex align-items-center my-2  column-gap-3">
                            <label class="" for="avatar">Photo</label>
                            <input  class="form-control"  type="file" name="avatar" id="avatar">
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" id="user_first_name" name="first_name" placeholder="Jonthan">
                            <label for="user_first_name">First Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" id="user_last_name" name="last_name" placeholder="Luthor">
                            <label for="user_last_name">Last Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="email" class="form-control" id="user_email" name="email" placeholder="name@example.com">
                            <label for="user_email">Email address</label>
                        </div>
                        <div class="form-floating my-2">

                            <input type="password" class="form-control" id="user_password" name="password" placeholder="Password">
                            <label for="user_password">Password</label>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Sign in</button>

                    </form>
                        {{-- {Password} --}}
                         <h1 class="h3 mb-3 fw-normal text-center my-4">Change Password   </h1>
                    <form action="/update" method="POST" class="profile_password" id="profile_password">
                       
                        <div class="form-floating">

                            <input type="password" class="form-control" id="user_password" name="password" placeholder="Password">
                            <label for="user_password">Current Password</label>
                        </div>
                        <div class="form-floating my-4">

                            <input type="password" class="form-control" id="user_password" name="password" placeholder="Password">
                            <label for="user_password">New Password</label>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Save</button>
                    </form>
                    <div class="mt-5">
                            <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Account Information   </h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Role: Administrator      </h6>
                                <p class="card-text">Status: Active</p>
                                <p class="card-text">Member Since: 13 August 2026</p>
                            </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    @endsection
