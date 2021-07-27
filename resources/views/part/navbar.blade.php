<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <img src="{{ asset('images/logo.jpg') }}" width="150" class="d-inline-block align-top ml-5" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-5">
            <li class="nav-item active">
                <a class="nav-link ml-2 mr-2" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2 mr-2" href="#">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2 mr-2" href="#">Jadwal</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link ml-2 mr-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Galery
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Lapangan 1</a>
                    <a class="dropdown-item" href="#">Lapangan 2</a>
                </div>
            </li>
        </ul>
    <section style="width: 100%; padding-left: 45%">
        <a class="btn btn-secondary" href="#" role="button">Register</a>
        <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
    </section>
    </div>
</nav>
