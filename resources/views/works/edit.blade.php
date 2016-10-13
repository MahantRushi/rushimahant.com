@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Works
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($works, ['route' => ['works.update', $works->id], 'method' => 'patch']) !!}

                        @include('works.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection