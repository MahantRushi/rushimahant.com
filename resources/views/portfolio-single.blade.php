@extends('app')
@section('content')
    <!-- .portfolio-single -->
    <div class="portfolio-single page-layout">



        <!-- .hentry -->
        <article class="hentry">

            <!-- .entry-header -->
            <header class="entry-header">

                <!-- PORTFOLIO-NAV -->
                <div class="portfolio-nav">
                    {{--<a class="prev ajax" href="portfolio-item-03.html"></a>--}}
                    <a class="back" href="#/portfolio"></a>
                    {{--<a class="next ajax" href="portfolio-item-02.html"></a>--}}
                </div>
                <!-- PORTFOLIO-NAV -->

                <!-- TITLE -->
                <h1 class="entry-title">{{ $portfolio->title }}</h1>
                <!-- TITLE -->


            </header>
            <!-- .entry-header -->


            <!-- .entry-content -->
            <div class="entry-content">

                @if($portfolio->soundcloud_link!="")
                    <iframe width="100%" height="450" scrolling="no" frameborder="no" src="{{ $portfolio->soundcloud_link }}&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                @endif

                @if($portfolio->video_link!="")
                    <iframe src="{{ $portfolio->video_link }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                @endif

                @if($portfolio->lightbox_image!="")
                    <img src="{{ $portfolio->lightbox_image }}" width="100%" height="450" alt="{{ $portfolio->title }}"/>
                @endif

                @if($portfolio->type=='gallery')
                    <img src="/images/portfolio/lightbox-02.jpg" width="100%" height="450" >
                    <img src="/images/portfolio/lightbox-03.jpg" width="100%" height="450" >
                    <img src="/images/portfolio/lightbox-04.jpg" width="100%" height="450" >
                @endif


                <!-- .mini-text -->
                <div class="mini-text">

                    <h4>ABOUT THE PROJECT</h4>
                    <p>
                        {{ $portfolio->about }}
                    </p>

                    <h4>MADE FOR</h4>
                    <p>{{ $portfolio->made_for }}</p>
                    @if($portfolio->external_link!="")
                        <p>
                            <a href="{{ $portfolio->external_link }}" target="_blank" class="button">LAUNCH PROJECT</a>
                        </p>
                    @endif

                </div>
                <!-- .mini-text -->
                <p>
                    {!! $portfolio->description !!}
                </p>

            </div>
            <!-- .entry-content -->


        </article>
        <!-- .hentry -->


    </div>
    <!-- .portfolio-single -->
@endsection