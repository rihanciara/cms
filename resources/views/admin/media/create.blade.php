@extends('layouts.admin')


@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">


@stop






@section('content')
<h1>Media Create </h1>

 <div class="col-sm-6">

    {!!Form::open(['method'=>'POST','action'=>'AdminMediaController@store','class'=>'dropzone'])!!}
   
     {!! Form::close() !!}




</div>

@endsection
@section('scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>


    
@endsection



