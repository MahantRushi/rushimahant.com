<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::number('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon:') !!}
    {!! Form::select('icon', ['Facebook' => 'facebook', 'Twitter' => 'twitter', 'Flickr' => 'flickr', 'Rss' => 'rss', 'Dribbble' => 'dribbble', 'Lastfm' => 'lastfm', 'Linkedin' => 'linkedin', 'Vimeo' => 'vimeo', 'Forrst' => 'forrst', 'Skype' => 'skype', 'Tumblr' => 'tumblr', 'Behance' => 'behance', 'Blogger' => 'blogger', 'Delicious' => 'delicious', 'Digg' => 'digg', 'Github' => 'github', 'Wordpress' => 'wordpress', 'Google-plus' => 'google-plus', 'Youtube' => 'youtube', 'Pinterest' => 'pinterest', 'Instagram' => 'instagram', 'Stack-overflow' => 'stack-overflow', 'Foursquare' => 'foursquare', 'Xing' => 'xing', 'Weibo' => 'weibo', 'Soundcloud' => 'soundcloud', 'Fivehundredpx' => 'fivehundredpx', 'Slideshare' => 'slideshare', 'Vine' => 'vine', 'Vkontakte' => 'vkontakte', 'Spotify' => 'spotify'], null, ['class' => 'form-control select2']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target', 'Target:') !!}
    {!! Form::select('target', ['_blank' => '_blank', '_self' => '_self'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('socials.index') !!}" class="btn btn-default">Cancel</a>
</div>
