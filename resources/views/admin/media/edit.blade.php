@extends('layouts.admin')

@section('content')
<h1>Media Create </h1>

 <div class="col-sm-6">
    
   {!!Form::open(['method'=>'POST','action'=>['AdminCategoriesController@store']])!!}
    <div class="form-group">
        {!!Form::label('name','Name') !!}
        {!!Form::text('name',null,['class'=>'form-control']) !!}
    </div>    
    
    <div class="form-group">
       
        {!!Form::submit('Submit',['class'=>'btn btn-primary']) !!}
     </div>   
     {!! Form::close() !!}





</div>








@endsection