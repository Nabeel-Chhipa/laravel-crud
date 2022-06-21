<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/update/{{$teacher->id}}" method='POST'>
        @csrf
        <input type="text" name='name' placeholder="name" value={{$teacher->name}} />
        <input type="text" name='city' placeholder="city" value={{$teacher->city}} />
        <input type="text" name='country' placeholder="country" value={{$teacher->country}} />
        <input type="submit" name='update' value='Update' >
    </form>
</body>
</html>