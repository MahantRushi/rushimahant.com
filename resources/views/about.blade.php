@extends('app')
@section('content')
    <div class="page-single page-layout">
        <!-- .hentry -->
        <article class="page hentry">
            <!-- .entry-header -->
            <header class="entry-header">
                <h1 class="entry-title">about me</h1>
            </header>
            <!-- .entry-header -->
            <!-- .entry-content -->
            <div class="entry-content">
                <!-- SERVICES -->
                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>services</i>
                    </h2>
                </div>
                <!-- section-title -->
                <!-- row -->
                <div class="row">
                    @foreach($services as $service)
                        <!-- col -->
                        <div class="col-sm-6 col-md-6">
                            <!-- service -->
                            <div class="service">
                                <!--<i class="pe-7s-glasses"></i>-->
                                <img src="{{ $service->logo }}" alt="{{ $service->title }}"/>
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                            <!-- service -->
                        </div>
                        <!-- col -->
                    @endforeach
                </div>
                <!-- row -->
                <!-- SERVICES -->
                <!-- PROCESS -->
                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>work procces</i>
                    </h2>
                </div>
                <!-- section-title -->
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">
                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-comment"></i>
                            <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            <h4>DISCOVER</h4>
                        </div>
                        <!-- process -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">
                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-light"></i>
                            <h4>IDEA</h4>
                        </div>
                        <!-- process -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">
                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-scissors"></i>
                            <h4>DESIGN</h4>
                        </div>
                        <!-- process -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">
                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-tools"></i>
                            <h4>DEVELOP</h4>
                        </div>
                        <!-- process -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">
                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-browser"></i>
                            <h4>TEST</h4>
                        </div>
                        <!-- process -->
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">
                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-rocket"></i>
                            <h4>LAUNCH</h4>
                        </div>
                        <!-- process -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
                <!-- PROCESS -->
                <!-- CLIENTS -->
                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>clients</i>
                    </h2>
                </div>
                <!-- section-title -->
                @foreach($clients->chunk(4) as $items)
                    <!-- row -->
                    <div class="row">
                        @foreach($items as $client)
                            <!-- col -->
                            <div class="col-xs-6 col-sm-3">
                                <!-- client -->
                                <div class="client">
                                    <a href="{{ $client->link }}" target="{{ $client->target }}">
                                        <img src="{{ $client->logo }}" alt="{{ $client->title }}">
                                    </a>
                                    <h4>{{ $client->title }}</h4>
                                </div>
                                <!-- client -->
                            </div>
                            <!-- col -->
                        @endforeach
                    </div>
                    <!-- row -->
                @endforeach
                <!-- CLIENTS -->
                <!-- FUN FACT -->
                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>fun fact</i>
                    </h2>
                </div>
                <!-- section-title -->
                @foreach($facts->chunk(4) as $items)
                    <!-- row -->
                    <div class="row">
                        @foreach($items as $fact)
                            <!-- col -->
                            <div class="col-xs-6 col-sm-3">
                                <!-- fun-fact -->
                                <div class="fun-fact">
                                    <i class="pe-7s-{{ $fact->icon }}"></i>
                                    <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                    <h4>{{ $fact->caption }}</h4>
                                </div>
                                <!-- fun-fact -->
                            </div>
                            <!-- col -->
                        @endforeach
                    </div>
                    <!-- row -->
                @endforeach
                <!-- FUN FACT -->
            </div>
            <!-- .entry-content -->
        </article>
        <!-- .hentry -->
    </div>
    <!-- .page-single -->
@endsection