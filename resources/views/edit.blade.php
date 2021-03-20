<!DOCTYPE html>
<html>
<head>
@extends('layouts.app')

@section('title')Index Page @endsection

@section('content')
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
                        <input value="update" class="btn btn-dark mt-2" type="submit" >
                    </div>
        </form>
        </div>

  
</body>
@endsection
</html>