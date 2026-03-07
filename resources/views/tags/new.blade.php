<x-layout>
    @push('styles')

    @endpush
    @section('title','New Tag')
    @section('content')

    <section class="form-signin w-100 m-auto">
        <form action="/new/tag" method="POST">
            <h1 class="h3 mb-3 fw-normal text-center"> New Tag</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="tagNAme" placeholder="Friends">
                <label for="tagNAme">Name</label> </div>
            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Sign in</button>

        </form>
    </section>


    @endsection
</x-layout>
