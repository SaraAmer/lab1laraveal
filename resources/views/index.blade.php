<html>

<head>


  @extends('layouts.app')

  @section('title')Index Page @endsection

  @section('content')

<body>




  <div class="py-3 col-md-9">

    <h1>Posts</h1>


    <table class="table table-striped">
      <thead>

        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Posted by</th>
          <th scope="col">Created at</th>
          <th scope="col">Action</th>

        </tr>
      </thead>

      <tbody>

        @foreach($posts as $post)
        <tr>

          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{ $post->user ? $post->user->name : 'user not found' }}</td>
          <td>{{Carbon\Carbon::parse($post->created_at)->Format('Y-m-d')}} </td>
          <td>
            <x-button class=" btn btn-primary mx-2" value="view"
              href="{{route('post.show',['post' => $post['id'] , 'slug' => $post['slug']])}}" />
            <x-button value="Edit" class="btn btn-info mx-2" href="{{route('post.edit' , ['post' => $post['id']])}}" />


            <form id="delete-form" method="POST" action="{{route('posts.destroy' , ['post' => $post['id']])}}"
              style="display:inline-block;">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="delete" onclick="return confirm('Are you sure?')">
            </form>
          </td>
        </tr>

        @endforeach
      </tbody>




    </table>
    <div>

      {{ $posts->links("pagination::bootstrap-4")}}

    </div>

  </div>
  <x-button class="btn btn-success mx-2" value="Create Post" href="{{route('post.create')}}" />
  </td>

  </div>
  </br>

  @endsection




</body>
<script>
  function deletePost() {
    const response = confirm("are you sure?");
    if (response == true) {

      event.preventDefault();
      document.getElementById('delete-form').submit();
    } else {
      console.log(false);
    }
  }
</script>

</html>