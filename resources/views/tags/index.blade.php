@extends('layouts.admin-layout')
@push('styles')
<link rel="stylesheet" href=" {{ URL::asset('css/contact.css') }}">
@endpush
@section('title','Contact Book')
@section('content')
<h1 class="h3 mt-3 fw-normal text-center"> My Tags</h1>

<div class="container-fluid">
    <div class="row">


        <!-- Main content -->
        <section class="col-md-9 mx-sm-auto col-lg-10 px-md-4">

            <div class="row">
                <div class="my-4">
                    <a class="col-sm-2 btn btn-primary" href="{{ route('admin.tags.new') }}">New Tag</a>
                </div>

                <form action={{ route('admin.tags.index') }} method="GET">

                    <div class="row">
                        <div class="col-xs-12 col-md-2 mb-3">
                            <input type="text" class="form-control" name="name" id="" placeholder="Tag name">
                        </div>
                        <div class="col-12 col-md-3 mb-3 | form-check">
                            <button type="submit" class="btn btn-primary mt-6 | text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">
                                Search
                            </button>
                         
                        </div>
                           <div class="col-12 col-md-3 mb-3 | form-check">
                                <a class="btn btn-secondary" href={{ route('admin.tags.index') }}> Reset</a>
                            </div>
                    </div>

                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['tags'] as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>
                                <a href={{ route('admin.tags.edit',$value) }} class="btn btn-primary">Update</a>
                                <form action="{{ route('admin.tags.delete',$value) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Tag?')">Delete</button>
                                </form>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $data['tags']->links() }}
            </div>
        </section>

    </div>
</div>
@endsection
