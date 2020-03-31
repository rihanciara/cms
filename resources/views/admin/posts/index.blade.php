@extends('layouts.admin')

@section('content')

<h1>Posts</h1>
@if(Session::has('deleted_post'))
<p class="bg-danger">{{session('deleted_post')}}</p>
@elseif(Session::has('created_post'))
<p class="bg-danger">{{session('created_post')}}</p>
@else(Session::has('cupdated_post'))
<p class="bg-danger">{{session('updated_post')}}</p>
@endif

<table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Catogory</th>
       
            <th>title</th>
            <th>body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
       
            @if($posts)
            @foreach ($posts as $post )
            <tr>
                <td>{{$post->id}}</td>
                <td><img height="100" src="{{$post->photo  ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td> 
             
                <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                <td>{{$post->category ?$post ->category->name: 'Uncategorized'}}</td>
              
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
            @endif
       
        </tbody>
    </table>
    
@endsection