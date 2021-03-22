<!DOCTYPE html>
<html>
@extends('layouts.app')

@section('title')Index Page @endsection

@section('content')

<body>

    <div class="py-3  col-md-6 m-auto ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>


            <div class="form-group">
                <textarea class="form-control" placeholder="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="post_creator">Post Creator</label>
                <select name="user_id" class="form-control" id="post_creator">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input value="Create" class="btn btn-dark mt-2" type="submit">
            </div>
        </form>
    </div>


</body>
@endsection

</html>