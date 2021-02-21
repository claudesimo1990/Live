@extends("layouts.master")

@section('content')

    <home-header-component :header="{{ $header }}"></home-header-component>

    <home-news-component :news="{{ $news }}"></home-news-component>

    <x-about-us>
        <div class="col-lg-6 about-img quigo-animate-class-css-element">
            <img src="{{ $about->image }}" alt="{{ $about->image }}">
        </div>
        <div class="col-lg-6 content quigo-animate-class-css-element">
            <h2>{{ $about->title }}</h2>
            <h3 class="text-justify">{{ $about->content }}</h3>
        </div>
    </x-about-us>

    <hr>

    <how-work :steps="{{ $steps }}" moreLink="{{ route('howItWork') }}"></how-work>


    <destinations :destinations="{{ $destinations }}"></destinations>

    <x-testimonial>
        <div class="row">
            @foreach ($testimonials as $item)
                <div class="owl-item col-md-4">
                    <div class="testimonial-item">
                        <p class="quigo-animate-class-css-element">
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                {{ $item->content }}
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="{{ $item->photo }}" class="testimonial-img quigo-animate-class-css-element" alt="">
                        <h3 class="quigo-animate-class-css-element">User - {{ $item->id }}</h3>
                        <h4 class="quigo-animate-class-css-element">user@user.com</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </x-testimonial>

    <section id="call-to-action" class="quigo-animate-class-css-element">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">contactez nous</h3>
                    <p class="cta-text">pour vos besoins de Publicites, vueillez contactez notre Team Marketing au numero suivant. oubien laisser un message et on vous contactera</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section>

@endsection