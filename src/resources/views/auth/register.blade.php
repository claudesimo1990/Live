@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@stop

@section('content')
    <main class="d-flex align-items-center min-vh-100 py-5 my-5 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{asset('/images/imgs/login.jpeg')}}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">

                            <div class="brand-wrapper">
                                <h4><a href="{{route('accueil')}}" class="scrollto">Go<span>AuBled</span></a> - Inscription</h4>
                            </div>

                            <register-form></register-form>

                            <p class="login-card-footer-text">deja un compte? <a href="{{ route('login') }}" class="text-reset">Login</a></p>
                            <div class="login-card-footer-nav block-media-login my-4">
                                <a href="{{ route('facebook') }}" class="btn btn-block btn-social btn-facebook text-white">
                                    <span class="fa fa-facebook"></span> Continuer avec facebook
                                </a>
                                <a href="{{ route('google') }}" class="btn btn-block btn-social btn-google text-white">
                                    <span class="fa fa-google"></span> Continuer avec google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  @stop
