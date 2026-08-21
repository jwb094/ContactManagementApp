@if(!request()->is(['/','register']))



{{-- <header class=" ">

    <div class="row d-md-none d-lg-block w-100 d-flex flex-column" style="top:100px;">
        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex p-2">Logo</div>
            <div class="d-flex p-2">
                <buttton class="c-button-tgl " id="c-button-tgl">
                    <div class="bar">
                        <span class="hamburger-top top"></span>
                        <span class="hamburger-middle middle"></span>
                        <span class="hamburger-bottom bottom"></span>
                    </div>
                </buttton>
            </div>
        </div>

        <div class="col-12">
            <div class="c-site-nav position-fixed">
                <ul class="">
                    <li>item 1</li>
                    <li>item 2</li>
                    <li>item 3</li>
                    <li>item 4</li>
                    <li>item 5</li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}
{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow d-none d-sm-flex">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        MyContacts
    </a>




</header>
<nav class="navbar navbar-dark bg-dark fixed-top d-sm-none d-md-none  d-lg-none shadow-sm">
    <div class="container-fluid">
        <div class="d-flex d-flex-row justify-content-between w-100">

            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="#">
                MyBrand
            </a>
            <buttton class="c-button-tgl " id="c-button-tgl">
                <div class="bar">
                    <span class="hamburger-top top"></span>
                    <span class="hamburger-middle middle"></span>
                    <span class="hamburger-bottom bottom"></span>
                </div>
            </buttton>
            <div class="c-site-nav position-fixed bg-dark">
                <ul class="">
                    <li class="text-light"><a href="{{ route('dashboard') }}">Home</a></li>
<li class="text-light"><a href="{{ route('contacts_list') }}">Contacts</a></li>
<li class="text-light"><a href="{{ route('tags_list') }}">Manage Tags</a></li>
<li class="text-light"><a href="{{ route('contacts_list') }}">My Profile</a></li>
<li class="text-light"><a href="{{ route('csv_index') }}">Export/Import</a></li>
</ul>
</div>
</div>
</div>
</nav> --}}

<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="/">
            MyApp
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation -->
        <div class="collapse navbar-collapse d-flex justify-content-end" id="mainNavbar">



            <!-- Authentication -->
            <div class="navbar-actions d-flex  flex-column flex-lg-row gap-2">

                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name ?? 'User' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</nav>

<!-- Mobile Navbaråß -->
{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm d-block d-sm-none">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="#">MyBrand</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavMobile" data-bs-auto-close="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNavMobile">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
        </div>

    </div>
</nav>--}}

{{--
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm | d-md-none d-lg-block">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="#">MyBrand</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
    </div>

  </div>
</nav>--}}
@endif
