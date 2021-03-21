<!DOCTYPE html>
<html>

<head>
  @extends('layouts.app')

  @section('title')Index Page @endsection

  @section('content')
</head>

<body>


  <div class="card">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <div>
        <span class="card-title"> <b>Title: </b></span>
        <span class="card-text">{{$post['title']}}</span>
      </div>
      <span> <b> Description : </b></span>
      <span class="card-text">{{$post['description']}}</span>
    </div>

  </div>

  <div class="card">
    <div class="card-header">
      Post Creator Info
    </div>
    <div class="card-body">
      <div>
        <span class="card-title"><b>Name:</b></span>
        <span class="card-text">{{$post->user->name}}</span>
      </div>
      <div>
        <span class="card-title"><b>Email: </b></span>
        <span class="card-text">{{$post->user->email}}</span>
      </div>
      <div>
        <span class="card-title"><b>Created at: </b></span>
        <span class="card-text">{{$post['created_at']}}</span>
      </div>
    </div>

  </div>
</body>

@endsection