@extends('part.base')
<style>
    .container-login {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif !important;
    }

</style>

@section('main')
<header>
    @include('part.navbar')
</header>


<main>
<div class="container container-login">
    <div class="card card-login" style="width: 18rem;">
        <div class="card-header text-center">Login</div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="card-body align-items-center">
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="sumbit" class="btn btn-primary" style="width: 100%">Login</button>
            </div>
        </form>
    </div>
</div>
</main>

<footer>

    @include('part.footer')
</footer>
@endsection
