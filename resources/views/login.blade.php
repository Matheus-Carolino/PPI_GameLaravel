@extends('layout-master')

@section('title', 'Login')

@section('content')
    <div class="background" style="z-index: -1; position: absolute; width: 100%; opacity: .9">
        <img src="backgrounds/login.jpg" alt="pokemon in green florest wallpaper" style="height: 100vh; width: 100%; object-fit: cover; object-position: bottom;">
    </div>
    <div class="container-md h-100">
        <div class="row justify-content-center">
            <div class="form col-md-6 col-sm-8 col-lg-4" style="min-width: 300px; margin-top: 100px">
                <div class="d-flex justify-content-center">
                    <img src="https://logosmarcas.net/wp-content/uploads/2020/05/Pokemon-Logo.png" alt="pokemon logo" style="width: 40%">
                </div>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group mb-3 m-auto">
                        <input type="email" class="form-control" name="email" id="emailId" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3 m-auto position-relative">
                        <input type="password" class="form-control" name="password" id="passwordId" placeholder="Password" required>
                        <span class="field-icon"><button class="bi bi-eye-fill text-white btn p-0 passwordShow" type="button"></button></span>
                    </div>
                    <p class="text-white text-center">Não possui uma conta? <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-url="/register/form" class="btn text-warning open-modal p-0">clique aqui</button> para registrar-se.</p>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>        
@endsection