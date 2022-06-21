<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Data</title>
</head>
<body>
    @foreach($teachers as $teacher)
        <p>
            {{$teacher->id}}
            {{$teacher->name}}
            {{$teacher->city}}
            {{$teacher->country}}
            <span><a href="/delete/{{$teacher->id}}">Delete</a></span>
            <span><a href="/edit/{{$teacher->id}}">Update</a></span>
        </p>
    @endforeach
</body>
</html>