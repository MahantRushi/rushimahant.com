@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($blog, ['route' => ['blogs.update', $blog->id], 'method' => 'patch','enctype' => 'multipart/form-data', 'files' => true ]) !!}

                        @include('blogs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.js"></script>
    <script>
        $(document).ready(function () {
            $("textarea").wysihtml5();
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css">
@endsection