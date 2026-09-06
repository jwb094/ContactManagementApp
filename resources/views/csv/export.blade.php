@extends('layouts.admin-layout')
@push('styles')
<link rel="stylesheet" href=" {{ URL::asset('css/form.css') }}">
@endpush
@section('title','Export Contact Database')
@section('content')

<div class="container-fluid">
    <div class="row">



        <!-- Main content -->
        <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <h1 class="h2">Export</h1>

            <div class="row g-4">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-body">


                            <form action={{ route('admin.csv.export') }} method="POST">
                                @csrf
                                <div class="mb-3">
                                    <x-form.form-label for="" class="form-label"> File Name</x-form.form-label>
                                    <x-form.form-input type="text" class="form-control" name="file_name" placeholder="contacts_000"></x-form.form-input>
                                </div>
                                @foreach($attributes as $key => $value)
                                    <div class="mb-3">
                                        <x-form.form-checkbox class="form-check-input" type="checkbox" name="fields[]" value="{{ $value }}">{{ $value }} </x-form.form-checkbox>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary btn-sm"> <i class="bi bi-upload"></i>Export</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>

@endsection
