
@extends('main')

@section('title')
    <title>Главная</title>
@endsection

@section('content')

    <main class="main-wrapper">

        @include('landing.navigation')

        <div class="content-wrapper oh">
    
            @include('landing.hero')

            @include('landing.service')

            @include('landing.promo')

            @include('landing.reviews')

            @include('landing.formBlog')
            
            @include('landing.partners')

            @include('landing.cta')
    
            @include('landing.footer')

            <div id="back-to-top">
                <a href="https://deothemes.com/envato/margin/html/index.html#top"><i class="ui-arrow-up"></i></a>
            </div>

        </div>
    </main>

@stop
