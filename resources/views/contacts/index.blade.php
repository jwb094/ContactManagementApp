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
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first Name">
                        </div>

                        <div class="col-12 col-md-2 mb-3">
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                        <div class="col-12 col-md-2 mb-3">
                            <input type="text" class="form-control" name="email" id="email" placeholder="email">
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <input class="form-check-input" type="checkbox" name="twitter" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Twitter
                            </label>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <input class="form-check-input" type="checkbox" name="linkedin" value="1" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                LinkedIn
                            </label>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <input class="form-check-input" type="checkbox" name="facebook" value="1" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Facebook
                            </label>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <input class="form-check-input" type="checkbox" name="favourite" value="1" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Favourite
                            </label>
                        </div>
                        <div class="col-12 col-md-2 mb-3 | form-check">
                            <button type="submit" class="btn btn-primary mt-6 | text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">
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
