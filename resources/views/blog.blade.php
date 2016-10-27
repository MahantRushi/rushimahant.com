@extends('app')
@section('content')
    <div class="page-single page-layout">
        <!-- .hentry -->
        <article class="page hentry">
            <!-- .entry-header -->
            <header class="entry-header">
                <h1 class="entry-title">latest from the blog</h1>
            </header>
            <!-- .entry-header -->
            <!-- .entry-content -->
            <div class="entry-content">
                <!-- LATEST POSTS -->
                <div class="latest-posts media-grid masonry" data-layout="masonry" data-item-width="340">
                    @foreach($latestBlogs as $blog)
                        <!-- post -->
                        <article class="hentry media-cell">
                            <div class="media-box">
                                <img src="{{ $blog->main_image }}" alt="{{ $blog->title }}">
                                <div class="mask"></div>
                                <a href="blog-single/{{ $blog->id }}.html"></a>
                            </div>
                            <header class="media-cell-desc">
                        <span class="cat-links">
                            <a href="#" rel="category tag">{{ $blog->category }}</a>
                        </span>
                                <h3>
                                    <a href="blog-single/{{ $blog->id }}.html">{{ $blog->title }}</a>
                                </h3>
                            </header>
                        </article>
                        <!-- post -->
                    @endforeach
                </div>
                <!-- LATEST POSTS -->
                {{--<p class="launch">--}}
                    {{--<a class="button" href="blog.html">SEE ALL POSTS</a>--}}
                {{--</p>--}}
            </div>
            <!-- .entry-content -->
        </article>
        <!-- .hentry -->
    </div>
    <!-- .page-single -->
@endsection