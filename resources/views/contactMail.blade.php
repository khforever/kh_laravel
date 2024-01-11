<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> From :  {{ $data['name']}}</h1> 

   <h1>Email:   {{ $data['email']}} </h1> 

   <h1>Phone :   {{ $data['phone']}} </h1> 

   <h1>Subject:  {{ $data['subject']}} </h1> 

   <p>Message:  {{ $data['message']}} </p>
</body>
</html>