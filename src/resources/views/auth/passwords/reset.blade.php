@extends('layouts.master')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
          @if (session()->has('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
          @if (session()->has('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
          @endif
        </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="text-center quigo-title">Changement du Mot de passe</h5>
            <form class="form-signin" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">
                <label for="inputEmail">Email</label>
                @error('email')<span class="error small">{{ $message }}</span>@enderror
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <label for="inputPassword">Nouveau Mot de passe</label>
                @error('password')<span class="error small">{{ $message }}</span>@enderror
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password_confirmation">
                <label for="inputPassword">Mot de passe de confirmation</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">modifier le mot de passe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
