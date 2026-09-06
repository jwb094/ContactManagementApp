@extends('layouts.admin-layout')
@push('styles')
<link rel="stylesheet" href=" {{ URL::asset('css/contact.css') }}">
@endpush
@section('title','Contact Book')
@section('content')

<h1 class="h3 mt-3 fw-normal text-center"> My Contacts</h1>
<div class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <section class="col-md-9 mx-sm-auto col-lg-10 px-md-4">

            <div class="row">
                <div class="my-4">
                    <a class="col-sm-2 btn btn-primary" href="{{ route('admin.contact.new') }}">New Contact</a>
                </div>
                <form action={{ route('admin.contacts.index') }} method="GET">

                    <div class="row">
                        <div class="col-12 col-md-2 mb-3">
                            <x-form.form-input type="text" id="first_name" class="form-control" name="first_name" placeholder="First Name"></x-form.form-input>
                        </div>

                        <div class="col-12 col-md-2 mb-3">
                            <x-form.form-input type="text" id="first_name" class="form-control" name="last_name" placeholder="Last Name"></x-form.form-input>
                        </div>
                        <div class="col-12 col-md-2 mb-3">
                            <x-form.form-input type="text" id="email" class="form-control" name="email" placeholder="Email"></x-form.form-input>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <x-form.form-label for="twitter" class="form-label">Twitter</x-form.form-label>
                            <x-form.form-checkbox type="checkbox" id="twitter" class="form-check-input" value="1" name="twitter"></x-form.form-checkbox>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <x-form.form-label for="linkedin" class="form-label">LinkedIn</x-form.form-label>
                            <x-form.form-checkbox type="checkbox" id="linkedin" class="form-check-input" value="1" name="linkedin"></x-form.form-checkbox>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <x-form.form-label for="facebook" class="form-label">Facebook</x-form.form-label>
                            <x-form.form-checkbox type="checkbox" id="facebook" class="form-check-input" value="1" name="facebook"></x-form.form-checkbox>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">

                            <x-form.form-label for="instagram" class="form-label">Insta</x-form.form-label>
                            <x-form.form-checkbox type="checkbox" id="instagram" class="form-check-input" value="1" name="instagram"></x-form.form-checkbox>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <x-form.form-label for="is_favourite" class="form-label">Is Favourite</x-form.form-label>
                            <x-form.form-checkbox type="checkbox" id="is_favourite" class="form-check-input" value="1" name="is_favourite"></x-form.form-checkbox>
                        </div>

                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <button type="submit" class="btn btn-primary mt-6 | text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm  py-2.5">
                                Search
                            </button>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <a class="btn btn-secondary" href={{ route('admin.contacts.index') }}> Reset</a>
                        </div>
                    </div>

                </form>

                <table class="table mt-4">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['contacts'] as $key => $value)
                        <tr>
                            <td colspan="1">{{ $value->first_name }}</td>
                            <td colspan="1">{{ $value->last_name }}</td>
                            <td colspan="1">{{ $value->email }}</td>
                            <td colspan="1">
                                <a class="btn btn-secondary" href={{ route('admin.contact.edit',$value->id) }}> Edit</a>
                                <form action="{{ route('admin.contact.delete',$value->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Contact?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $data['contacts']->links() }}
            </div>
        </section>

    </div>
</div>
@endsection
