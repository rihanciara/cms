@extends('layouts.admin')

@section('content')
<h1>Edit Category </h1>

<div class="col-sm-6">
    
   {!!Form::model([$category,'method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id])!!}
    <div class="form-group">
        {!!Form::label('name','Name') !!}
        {!!Form::text('name',null,['class'=>'form-control']) !!}
    </div>    
    
    <div class="form-group">
       
        {!!Form::submit('Submit',['class'=>'btn btn-primary']) !!}
     </div>   
     {!! Form::close() !!}





</div>

<div class="col-sm-6">

    @if($categories)
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
         
        </tr>
        </thead>
        <tbody>
       
          
            @foreach ($categories as $category )
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at ? $category->created_at->diffForHumans() :'no date' }}</td>
               
            </tr>
            @endforeach
        
        </tbody>

    </table>

    @endif