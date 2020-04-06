@extends('layouts.blog-post')



@section('content')
  
    
    <h1 class="page-header">
       Posts
        <small>My first cms</small>
    </h1>

    <!-- First Blog Post -->
        <h2>
            <a href="#">{{$post->title}}</a>
        </h2>
        <p class="lead">
        by <a href="index.php">{{$post->user->name}}</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>
            <hr>
        <img class="img-responsive" src="{{$post->photo->file}}" alt="">
            <hr>
        <p>{{$post->body}}</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


<hr>
@if (Session::has('comment_message'))
    {{session('comment_message')}}
@endif


@if(Auth::check())


<div class="well">
    <h4>Leave a comment</h4>
         
            <!-- Comments -->
                    {!! Form::open(['method'=>'POST','action'=>'PostCommentController@store'])!!}
                        
                        <input type="hidden" name='post_id' value='{{$post->id}}'>

                        <div class="form-group">
                            {!!Form::label('body','Body') !!}
                            {!!Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
                        </div>    
                        <div class="form-group">
                            {!!Form::submit('Submit Comment',['class'=>'btn btn-primary']) !!}
                        </div>   
                    
                    {!!Form::close()!!}
            </div>
            
    
    
@endif           
            {{-- @if(count($comments) > 0)


             @foreach($comments as $comment)
            <div class="media">
                <a class="pull-left" href="#">
                    <img height="64" class="media-object" src="{{Auth::user()->gravatar}}" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$comment->author}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>
            @endforeach
            @endif --}}

<hr>


    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>

</div>
@endsection