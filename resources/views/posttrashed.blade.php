<!DOCTYPE html>
<html lang="en">
<head>
  <title>trashed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.navPost')
<div class="container">
  <h2>The trashed post</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>description</th>
        <th>published</th>
       
        <th>Force Delete</th>
        <th>Restore Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td>{{$post->postTitle}}</td>
        <td>{{$post->description}}</td>
        <td>
            @if ($post->published==1)
           yes
        @else
        
            no
       
        @endif
        </td>
        
 
<td><a  class="btn btn-danger" href="postforceDelete/{{ $post->id }}"onclick="return confirm('Are you sure you want to delete?')">Force Delete</a></td>

 
<td><a  class="btn btn-success" href="postsrestorepost/{{ $post->id }}" >Restore Delete</a></td>

      </tr>
   @endforeach
    </tbody>
   
  </table>
</div>

</body>


<!--  onclick="return confirm('Are you sure you want to delete?')" -->
</html>
