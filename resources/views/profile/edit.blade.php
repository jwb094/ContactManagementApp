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
                    <form action={{ route('admin.profile.update',$user->id) }} method="POST" class="profile_information" id="profile_information">
                        @csrf
                        @method('PUT')
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" id="user_first_name" name="first_name" value={{ old('last_name',$user->first_name) }}>
                            <label for="user_first_name">First Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" id="user_last_name" name="last_name" value={{ old('last_name',$user->last_name) }}>
                            <label for="user_last_name">Last Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="email" class="form-control" id="user_email" name="email" value={{ old('last_name',$user->email) }}>
                            <label for="user_email">Email address</label>
                        </div>
                        <div class="form-floating my-2">

                            <input type="password" class="form-control" id="user_password" name="password" value={{ old('last_name',$user->password) }}>
                            <label for="user_password">Password</label>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Sign in</button>
                    </form>
      
        
                </section>
            </div>
        </div>
    </div>



    @endsection
