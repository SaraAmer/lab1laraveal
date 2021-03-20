<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>add product</title>
</head>

<body> 
    <div class="py-3  col-md-6 m-auto ">
   
        <form  method="GET" action="{{route('posts.index')}}" enctype="multipart/form-data">
            
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Title" name="name" >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Post creator" name="Price" >
                </div> 
    
            <div class="form-group">
                <textarea class="form-control" placeholder="description"  name="desc" ></textarea>
            </div>
    
    
                    <div>
                        <input value="Create" class="btn btn-dark mt-2" type="submit" >
                    </div>
        </form>
        </div>

  
</body>

</html>