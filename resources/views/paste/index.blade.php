<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">number phone</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $da)
          <tr>
            <th scope="row"> {{$da->id }}</th>
           <td> {{$da->title }}</td>
           <td>  {{ $da->body }}</td>
            <td>
                <a href="{{route('post.edit',$da->id)}}" class="btn btn-primary" role="button" data-bs-toggle="button">EDIT</a>
                <a href="{{route('post.delete',$da->id)}}" class="btn btn-warning" role="button" data-bs-toggle="button">DELETE</a>
            </td>
           
           
            @endforeach
          
          </tr>
        </tbody>
      </table>
     
</body>
</html>





<a href="{{url('paste/create')}}" class="btn btn-primary" role="button" data-bs-toggle="button">creaet</a>






