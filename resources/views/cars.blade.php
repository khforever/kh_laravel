<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>The list of car</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>description</th>
       
        <th>Category Name</th>
        <th>Category Id</th>
        <th>published</th>
        <th>Image</th>
        <th>Image Preview</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
      <tr>
        <td>{{$car->title}}</td>
        <td>{{$car->description}}</td>

        <td>{{$car->category->cat_name}} </td>
        <td>{{$car->category_id}}</td>
        <td>
            @if ($car->published==1)
           yes
        @else
        
            no
       
        @endif
        </td>
        <td>{{$car->image}}</td>
        <td><img src="{{ asset('assets/images/'.$car->image) }}" alt="car" style="width:100px;"></td>
        
<td><a class="btn btn-success" href="updateCar/{{ $car->id }}">Edit</a></td>

<td><a class="btn btn-info"  href="showCar/{{ $car->id }}">show</a></td>
<td><a  class="btn btn-danger" href="deleteCar/{{ $car->id }}"onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>
   @endforeach
    </tbody>
   
  </table>
</div>

</body>


<!--  onclick="return confirm('Are you sure you want to delete?')" -->
</html>
