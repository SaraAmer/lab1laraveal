<!DOCTYPE html>
<html>

<head>
    @extends('layouts.app')

    @section('title')Index Page @endsection

    @section('content')
</head>

<body>
    <div class="py-3  col-md-6 m-auto ">

        <form method="POST" action="{{route('posts.update',['post' => $post['id']])}})}}" >
        @csrf
        <input type="hidden" name="_method" value="put" />

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$post['title']}}">
            </div>
          
            <div class="form-group">
                <label for="post_creator">Post Creator</label>
                <select name="user_id" class="form-control" id="post_creator">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <textarea class="form-control" placeholder="description" name="description">
                {{$post['description']}}
                </textarea>
            </div>


            <div>
                <input value="update" class="btn btn-dark mt-2" type="submit">
            </div>
        </form>
    </div>


</body>
@endsection

</html>