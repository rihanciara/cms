@extends('layouts.blog-post')



@section('content')
  
    
    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
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
    <hr>

    <!-- Second Blog Post -->
    <h2>
        <a href="#">Blog Post Title</a>
    </h2>
    <p class="lead">
        by <a href="index.php">Start Bootstrap</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

    <!-- Third Blog Post -->
    <h2>
        <a href="#">Blog Post Title</a>
    </h2>
    <p class="lead">
        by <a href="index.php">Start Bootstrap</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

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