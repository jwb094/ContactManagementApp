@extends('layouts.admin-layout')
@push('styles')
<link rel="stylesheet" href=" {{ URL::asset('css/multi-step-form.css') }}">
@endpush
@section('title','home')
@section('content')

<div class="container-fluid">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
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


        <!-- Main content -->
        <div class="col-md-9 mx-sm-auto col-lg-10 px-md-4">
            <div class="col-md-12">
                <h1 class="">Edit X Contact</h1>
            </div>
            <section id="form-container" class="w-96 md:w-1/2 lg:w-1/2 xl:w-1/2">

                <div id="steps-bar">
                    <div class="step-indicator active">1</div>
                    <div class="step-indicator">2</div>
                    <div class="step-indicator">3</div>
                    <div class="step-indicator">4</div>
                </div>
                <form action={{ route('admin.contact.update',$contact) }} method="POST" id="multi-step">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                        <div class="step active">
                            <h2>Personal Info</h2>
                            <div class="form-floating mt-3">
                                <select class="form-select" id="title" name="title" aria-label="Default select example">
                                    <option @if($contact->title === "Mr") selected @endif value="Mr">Mr</option>
                                    <option @if($contact->title === "Mrs") selected @endif value="Mrs">Mrs</option>
                                    <option @if($contact->title === "Ms") selected @endif value="Ms">Ms</option>
                                    <option @if($contact->title === "Master") selected @endif value="Master">Master</option>
                                    <option @if($contact->title === "Dr") selected @endif value="Dr">Dr</option>
                                    <option @if($contact->title === "Prof") selected @endif value="Prof">Professor</option>
                                    <option @if($contact->title === "Sir") selected @endif value="Sir">Sir</option>
                                </select>
                                <label for="title" class="form-label">Title</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $contact->first_name) }}">
                                <label for="first_name" class="form-label">First Name </label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $contact->last_name) }}">
                                <label for="last_name" class="form-label">Last Name</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                                <label for="date_of_birth" class="form-label">Date</label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="1" id="is_favourite" name="is_favourite" value="{{ old('is_favourite') }}"
                                   @checked($contact->is_favourite)>
                                <label class="form-check-label" for="is_favourite">
                                    Is Favourite
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Notes</label>
                                <textarea class="form-control" name="notes" id="notes" name="notes" rows="3">{{ old('notes', $contact->notes) }}</textarea>
                            </div>
                        </div>
                        <div class="step">
                            <h2>Contact Details</h2>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}">
                                <label for="email" class="form-label">Email </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
                                <label for="phone" class="form-label">Mobile </label>
                            </div>


                        </div>
                        <div class="step">
                            <h2>Address</h2>
                            <div class="form-floating mt-3">
                                <input type="address_line_1" class="form-control" id="address_line_1" name="address_line_1" value="{{ old('address_line_1', $contact->address_line_1) }}">
                                <label for="address_line_1">Address Line 1</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="address_line_2" class="form-control" id="address_line_2" name="address_line_2" value="{{ old('address_line_2', $contact->address_line_2) }}">
                                <label for="address_line_2">Address Line 2</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="town_city" class="form-control" id="town_city" name="address_line_1" value="{{ old('town_city', $contact->town_city) }}">
                                <label for="town_city">Town/City</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="town_city" class="form-control" id="county" name="county" value="{{ old('county', $contact->county) }}">
                                <label for="town_city">County</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="post_code" class="form-control" id="post_code" name="post_code" value="{{ old('post_code', $contact->post_code) }}">
                                <label for="post_code">Post Code</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="country" class="form-control" id="country" value="{{ old('country', $contact->country) }}">
                                <label for="country">Country</label>
                            </div>
                        </div>
                        <div class="step">
                            <h2>Social Media Handle </h2>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $contact->facebook) }}">
                                <label for="facebook" class="form-label">Facebook </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $contact->twitter) }}">
                                <label for="twitter" class="form-label">X(formerly known as Twitter)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $contact->instagram) }}">
                                <label for="instagram" class="form-label">Instagram</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{ old('linkedin', $contact->linkedin) }}">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                            </div>
                        </div>
                        <div class="buttons mt-5">
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
