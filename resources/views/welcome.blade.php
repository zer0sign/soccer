@extends('part.base')
@section('main')
<header>
    @include('part.navbar')

    {{-- <div class="container mt-5">
        <div class="jumbotron jumbotron-header text-center">
            <h1 class="display-6">D'SOCCER FOOTBALL STADIUM</h1>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <a class="btn btn-warning btn-lg mt-5" href="#" role="button">Booking Lapangan</a>
        </div>
    </div> --}}



    <div class="jumbotron jumbotron-header text-center">
    <div class="overlay"></div>
    <div class="inner">
        <h1 class="display-5 mt-3">D'SOCCER FOOTBALL STADIUM</h1>
        <p class="lead">Buka Setiap Hari Senin-Jum'at | 08.00 - 22.00 </p>
        <p class="lead">
            <a class="btn btn-warning btn-lg mt-3" href="#" role="button">Booking</a>
        </p>
    </div>
</div>
</header>

<main class="container mb-5">
    <section>
        <h4 class="text-center mb-5">
            Kategori Paket
        </h4>
    </section>
    <div style="display: flex; justify-content: space-evenly; flex-wrap: wrap">
                <div class="card mb-3" style="width: 18rem;">
            <img src="{{ asset('images/image1.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
                <div class="card mb-3" style="width: 18rem;">
            <img src="{{ asset('images/image2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
                <div class="card mb-3" style="width: 18rem;">
            <img src="{{ asset('images/image3.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
    </div>
</main>

<footer>
    @include('part.footer')
</footer>
@endsection
