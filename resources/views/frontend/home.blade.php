@extends('layouts.frontend')

@section('body_class', 'page-home')

@section('highlight')
    <div class="jumbotron">
        <div class="container">

        </div>
    </div>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            Accueil
        </div>

        <div class="card-body">
            <h6>Bienvenue sur le site de squash de la ligue occitanie</h6>
            <p>
                Vous trouverez sur ce site toutes les informations et les prochains évenements de votre ligue
            </p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header"></i>Fédération Francaise de Squash</div>

        <div class="card-body">
            <a href="http://www.ffsquash.com"><i class="fa fa-home"></i> FFSquash </a>


        </div>
    </div>
@endsection
