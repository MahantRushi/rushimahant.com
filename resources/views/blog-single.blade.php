@extends('app')
@section('content')
    <div class="blog-single page-layout">
        <!-- .hentry -->
        <article class="post type-post hentry">
            <!-- .entry-header -->
            <header class="entry-header">
                <h1 class="entry-title">{{ $blog->title }}</h1>
                <!-- .entry-meta -->
                <div class="entry-meta">
                    <span class="entry-date">
                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{ $blog->published_at->toFormattedDateString() }}</time>
                    </span>
                    <span class="comment-link">
                        {{--<a href="blog-single.html#comments">7 Comments</a>--}}
                    </span>
                    <span class="cat-links">
                        <a href="#" title="View all posts in {{ $blog->category }}" rel="category tag">{{ $blog->category }}</a>
                    </span>
                    <!--<span class="edit-link">
                        <a class="post-edit-link" href="#">Edit</a>
                    </span>-->
                </div>
                <!-- .entry-meta -->
            </header>
            <!-- .entry-header -->
            <!-- .featured-image -->
            <div class="featured-image">
                <img src="{{ $blog->main_image }}" alt="{{ $blog->category }}-blog-image">
            </div>
            <!-- .featured-image -->
            <!-- .entry-content -->
            <div class="entry-content">
                <p>
                    {!! $blog->post !!}
                </p>
                <footer class="entry-meta tags">
                    @foreach($tags as $tag)
                        <a href="#" rel="tag">{{ $tag }}</a>
                    @endforeach
                </footer>
                <!-- .entry-meta -->
            </div>
            <!-- .entry-content -->

        </article>
    </div>
    <!-- .blog-single -->
@endsection