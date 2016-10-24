<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{!! route('socials.index') !!}"><i class="fa fa-facebook"></i><span>socials</span></a>
</li><li class="{{ Request::is('homepages*') ? 'active' : '' }}">
    <a href="{!! route('homepages.index') !!}"><i class="fa fa-home"></i><span>homepages</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-cog"></i><span>services</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-users"></i><span>clients</span></a>
</li>

<li class="{{ Request::is('facts*') ? 'active' : '' }}">
    <a href="{!! route('facts.index') !!}"><i class="fa fa-coffee"></i><span>facts</span></a>
</li>

<li class="{{ Request::is('works*') ? 'active' : '' }}">
    <a href="{!! route('works.index') !!}"><i class="fa fa-suitcase"></i><span>works</span></a>
</li>

<li class="{{ Request::is('education*') ? 'active' : '' }}">
    <a href="{!! route('education.index') !!}"><i class="fa fa-graduation-cap"></i><span>education</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{!! route('skills.index') !!}"><i class="fa fa-level-up"></i><span>skills</span></a>
</li>

<li class="{{ Request::is('testimonials*') ? 'active' : '' }}">
    <a href="{!! route('testimonials.index') !!}"><i class="fa fa-comments-o"></i><span>testimonials</span></a>
</li>

<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{!! route('profiles.index') !!}"><i class="fa fa-user"></i><span>profiles</span></a>
</li>

