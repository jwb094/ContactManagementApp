<x-layout>
    @push('styles')
    <link rel="stylesheet" href=" {{ URL::asset('css/contact.css') }}">
    @endpush
    @section('title','Contact Book')
    @section('content')
    <h1 class="h3 mt-3 fw-normal text-center"> Contacts</h1>
    <section class="container-fluid m-5 |  form-signin w-100 m-auto ">
        <form action="/register" method="POST">

            <div class="row">
                <div class="col-2 mb-3">
                    <input type="text" class="form-control" name="first_name" id="" placeholder="first Name">
                </div>

                <div class="col-2 mb-3">
                    <input type="text" class="form-control" name="lasst_name" id="" placeholder="Last Name">
                </div>
                <div class="col-2 mb-3">
                    <input type="text" class="form-control" name="lasst_name" id="" placeholder="email">
                </div>
                <div class="col-1  | form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Twitter
                    </label>
                </div>
                <div class="col-1 ml-1 | form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        LinkedIn
                    </label>
                </div>
                <div class="col-1 ml-1 | form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Facebook
                    </label>
                </div>
                <div class="col-1 ml-1 | form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Favourite
                    </label>
                </div>
            </div>

        </form>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    @endsection
</x-layout>
