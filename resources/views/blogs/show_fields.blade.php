<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $blog->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $blog->title !!}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{!! $blog->category !!}</p>
</div>

<!-- Main Image Field -->
<div class="form-group">
    {!! Form::label('main_image', 'Main Image:') !!}
    <p>{!! $blog->main_image !!}</p>
</div>

<!-- Post Field -->
<div class="form-group">
    {!! Form::label('post', 'Post:') !!}
    <p>{!! $blog->post !!}</p>
</div>

<!-- Tags Field -->
<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{!! $blog->tags !!}</p>
</div>

<!-- Published At Field -->
<div class="form-group">
    {!! Form::label('published_at', 'Published At:') !!}
    <p>{!! $blog->published_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $blog->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $blog->updated_at !!}</p>
</div>

