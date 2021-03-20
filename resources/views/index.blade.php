
<html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>dashboard</title>
    </head>
    
    <body>



     
      <div class="py-3 col-md-9">
 
        <h1>Posts</h1>
  
   
        <table class="table table-striped" >
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
                  
                  <td>{{$post['id']}}</td>
                  <td>{{$post['title']}}</td>
                  <td>{{$post['posted_by']}}</td>
                  <td>{{$post['created_at']}}</td>
                  <td><a class=" btn btn-primary mx-2" href="{{route('post.show')}}" >view</a><a class="btn btn-info mx-2" href="{{route('post.edit')}}" >Edit</a><button class="btn btn-danger"  >delete</button></td>
                </tr>
          
  @endforeach
              </tbody>
              
            
           
      
          </table>
        </div>
        <a class=" btn btn-success mx-2" href="{{route('post.create')}}" >Create Post</a>
</div>







<script src="../uploaded/js/jquery-3.3.1.slim.min.js"></script>
<script src="../uploaded/public/js/popper.min.js"></script>
<script src="../uploaded/public/js/bootstrap.min.js"></script>
<script src="../uploaded/public/js/mine.js"></script>
<script src="/uploaded/js/edit.js"></script>


</body>
</html>