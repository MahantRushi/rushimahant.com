<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $homepages->id !!}</p>
</div>

<!-- Order Field -->
<div class="form-group">
    {!! Form::label('order', 'Order:') !!}
    <p>{!! $homepages->order !!}</p>
</div>

<!-- Icon Field -->
<div class="form-group">
    {!! Form::label('icon', 'Icon:') !!}
    <p><i class="pe-7s-{!! $homepages->icon !!}" style="font-size:40px;"></i></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $homepages->title !!}</p>
</div>

<!-- Punchline Field -->
<div class="form-group">
    {!! Form::label('punchline', 'Punchline:') !!}
    <p>{!! $homepages->punchline !!}</p>
</div>

<!-- Backgroundimage Field -->
<div class="form-group">
    {!! Form::label('backgroundImage', 'Backgroundimage:') !!}
    <p><img src="{!! $homepages->backgroundImage !!}" height="50"/></p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{!! $homepages->link !!}</p>
</div>

<!-- Target Field -->
<div class="form-group">
    {!! Form::label('target', 'Target:') !!}
    <p>{!! $homepages->target !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $homepages->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $homepages->updated_at !!}</p>
</div>

