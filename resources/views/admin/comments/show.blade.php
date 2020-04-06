@extends('layouts.admin')

@section('content')
<h1>Comments </h1>
@if(count((array)$comments) > 0)
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Email</th>
        <th>body</th>
      
    </tr>
    </thead>
    <tbody>
   
        @foreach ($comments as $comment )
        <tr>
            <td>{{$comment->id}}</td>
            <td>{{$comment->author}}</td>
            <td>{{$comment->email}}</td>
            <td>{{$comment->body}}</td>
           
            <td><a href="{{route('home.post',$comment->post->id)}}">view Post</a></td>
            <td>
                @if($comment->is_active==1)
                {!!Form::open(['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]])!!}
                <div class="form-group">
                        <input type="hidden" name="is_active" value="0">
                    {!!Form::submit('Un Approve',['class'=>'btn btn-danger']) !!}
                 </div>   
                {!! Form::close() !!}

                @else

                {!!Form::open(['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]])!!}
                <div class="form-group">
                        <input type="hidden" name="is_active" value="1">
                    {!!Form::submit('Approve',['class'=>'btn btn-success']) !!}
                 </div>   
                {!! Form::close() !!}
                 @endif

            </td>
            <td>  {!!Form::open(['method'=>'DELETE','action'=>['PostCommentController@destroy',$comment->id]])!!}
                <div class="form-group">
       
                    {!!Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                 </div>   
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
     
   
    </tbody>
</table>
@else


<h1 class="text-center">No Comments</h1>

@endif
@endsection