@extends("layouts.master")

@section('content')

    <home-header-component :header="{{ $header }}"></home-header-component>

    <home-news-component :posts="{{ $posts }}"></home-news-component>

    <x-about-us>

        <div class="col-lg-6 about-img quigo-animate-class-css-element">
            <img src="{{ $about->image }}" alt="{{ $about->image }}">
        </div>

        <div class="col-lg-6 content quigo-animate-class-css-element">
            <h2>{{ $about->title }}</h2>
            <h3 class="text-justify">{{ $about->content }}</h3>
        </div>

    </x-about-us>

    <how-work :steps="{{ $steps }}" more-link="{{ route('howItWork') }}"></how-work>

    <destinations :destinations="{{ $destinations }}"></destinations>

    <x-testimonial>
        <div class="row">
            @foreach ($testimonials as $item)
                <div class="owl-item col-md-4">
                    <div class="testimonial-item">
                        <p class="quigo-animate-class-css-element">
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="assets/img/quote-sign-left.png">
                                {{ $item->content }}
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="assets/img/quote-sign-right.png">
                        </p>
                        <img src="{{ $item->user->avatar }}" class="testimonial-img quigo-animate-class-css-element" alt="{{ $item->user->avatar }}">
                        <h3 class="quigo-animate-class-css-element">{{ $item->user->name}}</h3>
                        <h4 class="quigo-animate-class-css-element">{{ $item->user->email}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </x-testimonial>

@endsection
