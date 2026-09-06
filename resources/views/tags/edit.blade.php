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
                    <div class="form-check mt-3">
                        <x-form.form-label for="tagname" class="form-label"> Tag Name</x-form.form-label>
                        <x-form.form-input type="text" id="tagname" class="form-control" name="name" placeholder="Friends" value="{{  $tag->name }}"></x-form.form-input>
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Update</button>

                </form>
            </section>
        </div>

    </div>
</div>
@endsection
