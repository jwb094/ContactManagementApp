@extends('layouts.admin-layout')
    @push('styles')

    @endpush
    @section('title','Edit Tag')
    @section('content')

    <div class="container-fluid">
        <div class="row">

            <!-- Main content -->
            <div class="col-xs-12 col-md-12 mx-sm-auto col-lg-10 px-md-4">

                <section class=" m-auto">
                    <form action={{ route('admin.tags.update',$tag) }} method="POST">
                        @csrf
                        @method('PUT')
                        <h1 class="h3 mb-3 fw-normal text-center"> Edit {{ $tag->name }} Tag</h1>
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="name" name="name"
                                value={{  $tag->name }}>
                            <label for="tagName">Name</label> 
                        </div>

                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Update</button>

                    </form>
                </section>
            </div>

        </div>
    </div>
    @endsection

