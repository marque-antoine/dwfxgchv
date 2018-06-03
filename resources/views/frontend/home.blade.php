@extends('layouts.frontend')

@section('body_class', 'page-home')

@section('highlight')
    <div class="jumbotron">
        <div class="container">
            @include('frontend.partials.slider')
        </div>
    </div>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            Accueil
        </div>

        <div class="card-body">
            <p>
               Bienvenue sur le site de squash de la ligue occitanie
            </p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header"></i> Font Awesome</div>

        <div class="card-body">
            <i class="fa fa-home"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-pinterest"></i>
        </div>
    </div>
@endsection
