@extends('app')
@section('content')
    <div class="page-single page-layout">
        <!-- .hentry -->
        <article class="page hentry">
            <!-- .entry-header -->
            <header class="entry-header">
                <h1 class="entry-title">portfolio</h1>
            </header>
            <!-- .entry-header -->
            <!-- .entry-content -->
            <div class="entry-content">
                <!--FILTERS-->
                <ul id="filters" class="filters hidden">
                    <li class="current">
                        <a href="#" data-filter="*">all</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".media">Media</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".illustration">Illustration</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".video">Video</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".audio">Audio</a>
                    </li>
                </ul>
                <!--FILTERS-->
                <!-- PORTFOLIO -->
                <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                    @foreach($portfolios as $portfolio)
                        <div class="media-cell {{ $type[$portfolio->type] }} hentry">
                            <div class="media-box">
                                <div class="card-view card-view-ninth">
                                    <img src="{{ $portfolio->main_image }}" />
                                    <div class="card-mask mask-1"></div>
                                    <div class="card-mask mask-2"></div>
                                    <div class="card-content">
                                        <h2>{{ $portfolio->title }}</h2>
                                        <p>{{ $portfolio->punchline }}</p>
                                        @if($portfolio->type=='illustration')
                                            <!-- new page - portfolio -->
                                                <a href="portfolio-item-{{ $portfolio->id }}.html" class="ajax card-info">Show more</a>
                                                <!-- new page - portfolio -->
                                        @elseif($portfolio->type=='video')
                                            <!-- lightbox - video -->
                                                <a href="{{ $portfolio->video_link }}"
                                                   title="{{ $portfolio->title }}" class="lightbox mfp-iframe card-info">Show more</a>
                                                <!-- lightbox - video -->
                                        @elseif($portfolio->type=='image')
                                            <!-- lightbox - image -->
                                                <a href="{{ $portfolio->lightbox_image }}" title="{{ $portfolio->title }}"
                                                   class="lightbox card-info">Show more</a>
                                                <!-- lightbox - image -->
                                        @elseif($portfolio->type=='soundcloud')
                                            <!-- lightbox - soundcloud : url copied from share/embed code -->
                                                <a href="{{ $portfolio->soundcloud_link }}&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"
                                                   title="Soundcloud embed" class="lightbox mfp-iframe card-info">Show more</a>
                                                <!-- lightbox - soundcloud -->
                                        @elseif($portfolio->type=='gallery')
                                            <!-- lightbox - gallery -->
                                                <a href="/images/portfolio/lightbox-02.jpg" class="lightbox" title="This is title"></a>
                                                <a href="/images/portfolio/lightbox-03.jpg" class="lightbox"></a>
                                                <a href="/images/portfolio/lightbox-04.jpg" class="lightbox" title="Dog have dreams"></a>
                                                <!-- lightbox - gallery -->
                                        @elseif($portfolio->type=='external')
                                            <a href="{{ $portfolio->external_link }}" target="_blank" class="card-info">Show more</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <!-- PORTFOLIO -->
            </div>
            <!-- .entry-content -->
        </article>
        <!-- .hentry -->
    </div>
    <!-- .page-single -->
@endsection