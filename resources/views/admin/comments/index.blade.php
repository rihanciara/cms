@extends('layouts.admin')

@section('content')
<h1>Comments </h1>
@if(count($comments) > 0)
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Photo</th>
        <th>Email</th>
        <th>body</th>
        <th>Created</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
   
        @if($comments)
        @foreach ($comments as $comment )
        <tr>
            <td>{{$comment->id}}</td>
         
            <td>{{$comment->author}}</td>
              
  {{--        <td><img height="100" src="{{$comment->photo  ? $comment->photo->file : 'http://placehold.it/400x400'}}" alt=""></td> 
          <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
      <td>{{$comment->category ?$post ->category->name: 'Uncategorized'}}</td>
     --}}      
          
            <td>{{$comment->email}}</td>
            <td>{{$comment->body}}</td>
            <td>{{$comment->created_at->diffForHumans()}}</td>
            <td>{{$comment->updated_at->diffForHumans()}}</td>
            <td><a href="{{route('home.post',$comment->post->id)}}">view comment</a></td>
     
        </tr>
        @endforeach
        @endif
   
    </tbody>
</table>
@endif
@endsection