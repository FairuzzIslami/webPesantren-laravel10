@extends('layout.layout')

@section('content')
    <section style="margin-top: 150px">
        <div class="container col-xxl-6 py-5">
            <h3 class="fw-boldd mb-3">Halaman login Admin</h3>

            <form action="/login" method="POST">
                @csrf
                <div class="form-group py-3 mb-3">
                    <label for="">Massukan email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group py-3 mb-3">
                    <label for="">Massukan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection