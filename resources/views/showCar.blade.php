<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    welcome


    <h1>{{$car->title}}</h1>
   
<h2>     {{$car->description}}    </h2>
<h2>     {{$car->created_at}}    </h2>

<h2>     {{$car->updated_at}}    </h2>


<h2>     {{$car->category->cat_name}}    </h2>
<p>


{{$car->published?"published":"Not published"}}
</p>



<br>


<img src="{{ asset('assets/images/'.$car->image) }}" alt="car" style="width:200px;">
</body>
</html>