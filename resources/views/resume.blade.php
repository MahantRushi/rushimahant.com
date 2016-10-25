@extends('app')
@section('content')
    <div class="page-single page-layout">
        <!-- .hentry -->
        <article class="page hentry">
            <!-- .entry-header -->
            <header class="entry-header">
                <h1 class="entry-title">resume</h1>
            </header>
            <!-- .entry-header -->
            <!-- .entry-content -->
            <div class="entry-content">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-sm-6">
                        <div class="event">
                            <h2>WORK HISTORY</h2>
                            <p>
                                <i class="pe-7s-ribbon"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            </p>
                        </div>
                        @foreach($works as $work)
                            <div class="event">
                                <h3>{{ $work->start->formatLocalized('%b %Y')  }} - {{ ($work->end->year=="0001")?"Current":$work->end->formatLocalized('%b %Y') }}</h3>
                                <h4>{{ $work->title }}</h4>
                                <h5>{{ $work->company }}</h5>
                                <p>{{ $work->description }}</p>
                            </div>
                        @endforeach

                        <div class="event">
                            <h2>EDUCATION</h2>
                            <p>
                                <i class="pe-7s-study"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            </p>
                        </div>
                        @foreach($education as $ed)
                            <div class="event">
                                <h3>{{ $ed->end }}</h3>
                                <h4>{{ $ed->title }}</h4>
                                <h5>{{ $ed->institution }}</h5>
                                <p>{{ $ed->description }}</p>
                            </div>
                        @endforeach
                        <p><a href="Rushi_Mahant_CV.pdf" download="Rushi Mahant CV.pdf" target="_blank"
                              class="button"><i class="pe-7s-download"></i>Download CV</a></p>
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-sm-6">
                        <!-- section-title -->
                        <div class="section-title center">
                            <h2>
                                <i>marketable skills</i>
                            </h2>
                        </div>
                        <!-- section-title -->
                        @foreach($marketableSkills as $skill)
                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <i class="pe-7s-{{ $skill->icon }}"></i>
                                <h4>{{ $skill->title }}</h4>
                                <div class="bar" data-percent="{{ $skill->level }}">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->
                        @endforeach

                        <!-- section-title -->
                        <div class="section-title center">
                            <h2>
                                <i>transferable skills</i>
                            </h2>
                        </div>
                        <!-- section-title -->
                        @foreach($transferableSkills as $skill)
                            <!-- .skill-unit -->
                                <div class="skill-unit">
                                    <i class="pe-7s-{{ $skill->icon }}"></i>
                                    <h4>{{ $skill->title }}</h4>
                                    <div class="bar" data-percent="{{ $skill->level }}">
                                        <div class="progress"></div>
                                    </div>
                                </div>
                                <!-- .skill-unit -->
                        @endforeach

                        <!-- section-title -->
                        <div class="section-title center">
                            <h2>
                                <i>TESTIMONIALS</i>
                            </h2>
                        </div>
                        <!-- section-title -->
                        @foreach($testimonials as $testimonial)
                            <!-- Testimonial -->
                            <div class="testo">
                                <img src="{{ $testimonial->photo }}" alt="{{ $testimonial->name }}">
                                <h4>{{ $testimonial->name }}</h4>
                                <h5>{{ $testimonial->position }} / {{ $testimonial->company }}</h5>
                                <p>{{ $testimonial->testimonial }}</p>
                            </div>
                            <!-- Testimonial -->
                        @endforeach
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- .entry-content -->
        </article>
        <!-- .hentry -->
    </div>
    <!-- .page-single -->
@endsection