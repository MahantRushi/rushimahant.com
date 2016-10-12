<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{!! route('socials.index') !!}"><i class="fa fa-edit"></i><span>socials</span></a>
</li><li class="{{ Request::is('homepages*') ? 'active' : '' }}">
    <a href="{!! route('homepages.index') !!}"><i class="fa fa-edit"></i><span>homepages</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>services</span></a>
</li>

