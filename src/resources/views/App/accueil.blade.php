@extends("layouts.master")

@section('content')

    @include("layouts/includes/header")

    <home-news-component :news="{{ $latest_news }}"></home-news-component>

    <about img="{{ asset('storage/Home/about.png') }}"></about>

    <how-work how-it-work="{{ route('howItWork') }}"></how-work>

    <destinations></destinations>

    <testimonials :users="{{ $users }}" asset={{ asset('storage') }}></testimonials>

@endsection

