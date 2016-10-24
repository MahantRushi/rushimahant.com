@extends('app')
@section('content')
    <ul class="cd-gallery">
        @foreach($pages as $page)
            <li class="cd-item">
                <img src="{{ $page->backgroundImage }}" alt="{{ $page->title }}">
                <a href="{{ $page->link }}" data-slug="about">
                    <div>
                        <i class="pe-7s-{{ $page->icon }}"></i>
                        <h2>{{ $page->title }}</h2>
                        <p>{{ $page->punchline }}</p>
                        <b>View More</b>
                    </div>
                </a>
            </li>
        @endforeach
        <!--<li class="cd-item">
               <img src="images/home/blog.jpg" alt="image">
            <a href="contact.html" data-slug="contact">
                <div>
                    <i class="pe-7s-mail"></i>
                    <h2>Contact</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    <b>View More</b>
                </div>
            </a>
        </li>-->
    </ul>
    <!-- .cd-gallery -->
    <!-- .page-bottom -->
    <div class="page-bottom">
        <!-- .row -->
        <div class="row">
            <!-- .col-md-6 -->
            <div class="col-md-12">
                <h4>Drop Me A Line</h4>
                <!-- .contact-form -->
                <div class="contact-form">
                    <form id="contact-form" class="validate-form" method="post" action="send-mail.php">
                        <!-- enter mail subject here -->
                        <input type="hidden" name="subject" id="subject"
                               value="You have a new message from Photographer!">
                        <p>
                            <label for="name">NAME</label>
                            <input type="text" name="name" id="name" class="required">
                        </p>
                        <p>
                            <label for="email">EMAIL</label>
                            <input type="text" name="email" id="email" class="required email">
                        </p>
                        <p class="antispam">Leave this empty if you are a human :
                            <br/><input name="url"/>
                        </p>
                        <p>
                            <label for="message">MESSAGE</label>
                            <textarea name="message" id="message" class="required"></textarea>
                        </p>
                        <p>
                            <button class="submit button">Send</button>
                        </p>
                    </form>
                </div>
                <!-- .contact-form -->
            </div>
            <!-- .col-md-6 -->
            <!-- .col-md-12 -->
            <div class="col-md-12">
                <!-- fun-fact -->
                <div class="fun-fact">
                    <i class="pe-7s-map-marker"></i>
                    <!--<img src="images/site/icon-03.png" alt="image"/>-->
                    <h4>{{ $myProfile->location }}</h4>
                </div>
                <!-- fun-fact -->
                <!-- fun-fact -->
                <div class="fun-fact">
                    <i class="pe-7s-call"></i>
                    <h4>Tel : {{ $myProfile->mobile }}</h4>
                </div>
                <!-- fun-fact -->
                <!-- fun-fact -->
                <div class="fun-fact">
                    <i class="pe-7s-mail"></i>
                    <h4>{{ $myProfile->email }}</h4>
                </div>
                <!-- fun-fact -->
                <!-- fun-fact -->
                <div class="fun-fact">
                    @if($myProfile->freelance=="Not")
                        <i class="pe-7s-close"></i>
                        <h4>Freelance Not Available</h4>
                    @else
                        <i class="pe-7s-check"></i>
                        <h4>Freelance Available</h4>
                    @endif
                </div>
                <!-- fun-fact -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .page-bottom -->
@endsection