<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }}">
    @endpush
    @section('title','home')
    @section('content')

    <section class="form-signin w-100 m-auto">
        <form action="/login" method="POST">
            <h1 class="h3 mb-3 fw-normal text-center"> Sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
            <div class="form-floating">

                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label> </div>
            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Sign in</button>
            <a class="btn btn-primary w-100 py-2 mt-2" href="/register">Register</a>

        </form>
    </section>


    @endsection
</x-layout>
