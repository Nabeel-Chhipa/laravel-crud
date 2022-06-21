<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header title='Register' />
    <h2>Register </h2>
    <form action="dashboard" method='POST'>
        @csrf
        <input type="text" placeholder='First Name' name='firstName' />
        <br /> <br />
        <input type="text" placeholder='Last Name' name='lastName' />
        <br /> <br />
        <input type="text" placeholder='Country' name='country' />
        <br /> <br />
        <input type="text" placeholder='City' name='city' />
        <br /> <br />
        <input type="submit" value="Submit" >
    </form>
    <x-footer abc='nabeel' />
</body>
</html>