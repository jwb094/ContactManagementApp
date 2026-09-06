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
        <!-- Main content -->
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="col-md-12">
                <h1 class="">New Contact</h1>
            </div>
            <section id="form-container" class="">




                <div id="steps-bar">
                    <div class="step-indicator active">1</div>
                    <div class="step-indicator">2</div>
                    <div class="step-indicator">3</div>
                    <div class="step-indicator">4</div>
                </div>
                <form action={{ route('admin.contact.store') }} method="POST" id="multi-step">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-1 sm:gap-6">
                        <div class="step active">
                            <h2>Personal Info</h2>
                            <div class="form-check mt-3">
                                <x-form.form-label for="title" class="form-label"> Title </x-form.form-label>
                                <x-form.form-select type="text" id="title" class="form-select" name="title" value="{{ old('title') }}">
                                    </x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="first_name" class="form-label"> First Name </x-form.form-label>
                                <x-form.form-input type="text" id="first_name" class="form-control" name="first_name" value="{{ old('first_name') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="last_name" class="form-label"> Last Name </x-form.form-label>
                                <x-form.form-input type="text" id="last_name" class="form-control" name="last_name" value="{{ old('last_name') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="date_of_birth" class="form-label"> Date Of Birth </x-form.form-label>
                                <x-form.form-input type="date" id="date_of_birth" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="is_favourite" class="form-label">Is Favourite</x-form.form-label>
                                <x-form.form-checkbox type="checkbox" id="is_favourite" class="form-check-input" value="1" name="is_favourite" value="{{ old('is_favourite') }}"></x-form.form-checkbox>
                            </div>

                            <div class="form-check my-3">
                                <x-form.form-label for="notes" class="form-label"> Notes </x-form.form-label>
                                <x-form.form-textarea type="text" id="notes" class="form-control" name="notes" rows="3">{{ old('last_name') }}</x-form.form-input>
                            </div>
                        </div>
                        <div class="step">
                            <h2>Address</h2>
                            <div class="form-check mt-3">
                                <x-form.form-label for="address_line_1" class="form-label"> Address Line 1 </x-form.form-label>
                                <x-form.form-input type="text" id="address_line_1" class="form-control" name="address_line_1" value="{{ old('address_line_1') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="address_line_2" class="form-label"> Address Line 2 </x-form.form-label>
                                <x-form.form-input type="text" id="address_line_2" class="form-control" name="address_line_2" value="{{ old('address_line_2') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="town_city" class="form-label"> Town/City </x-form.form-label>
                                <x-form.form-input type="text" id="town_city" class="form-control" name="town_city" value="{{ old('town_city') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="county" class="form-label"> County/Region </x-form.form-label>
                                <x-form.form-input type="text" id="county" class="form-control" name="county" value="{{ old('county') }}"></x-form.form-input>
                            </div>
                            <div class="form-check mt-3">
                                <x-form.form-label for="country" class="form-label"> Country </x-form.form-label>
                                <x-form.form-input type="text" id="country" class="form-control" name="country" value="{{ old('country') }}"></x-form.form-input>
                            </div>
                            <div class="form-check my-3">
                                <x-form.form-label for="post_code" class="form-label"> Post Code </x-form.form-label>
                                <x-form.form-input type="text" id="post_code" class="form-control" name="post_code" value="{{ old('post_code') }}"></x-form.form-input>
                            </div>
                        </div>
                        <div class="step">
                            <h2>Contact Details</h2>
                            <div class="form-check mt-3">
                                <x-form.form-label for="email" class="form-label"> Email </x-form.form-label>
                                <x-form.form-input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}"></x-form.form-input>
                            </div>
                            <div class="form-check my-3">
                                <x-form.form-label for="phone" class="form-label">Phone </x-form.form-label>
                                <x-form.form-input type="text" id="phone" class="form-control" name="phone" value="{{ old('phone') }}"></x-form.form-input>
                            </div>
                        </div>

                        <div class="step">
                            <h2>Social Media Handle </h2>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}">
                                <label for="facebook" class="form-label">Facebook </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter') }}">
                                <label for="twitter" class="form-label">X(formerly known as Twitter)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram') }}">
                                <label for="instagram" class="form-label">Instagram</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                            </div>
                        </div>
                        <div class="buttons">
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
