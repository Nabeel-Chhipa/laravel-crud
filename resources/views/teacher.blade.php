<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/store" method='POST'>
        @csrf
        <input type="text" name='name' placeholder="name" />
        <input type="text" name='city' placeholder="city" />
        <input type="text" name='country' placeholder="country" />
        <input type="submit" name='insert' value='submit' >
    </form>
</body>
</html>