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

