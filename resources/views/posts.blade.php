<!DOCTYPE html>
<html lang="en">
<head>
  <title>Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.navPost')
<div class="container">
  <h2>The list of post</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>Created_at</th>
 
        <th>Edit</th>
        <th>Show</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td>{{$post->postTitle}}</td>
        <td>{{$post->created_at}}</td>
       
        
<td><a class="btn btn-success"  href="updatePost/{{ $post->id }}">Edit</a></td>

<td><a class="btn btn-info"   href="showPost/{{ $post->id }}">show</a></td>
      </tr>
   @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
