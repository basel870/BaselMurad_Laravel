<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <style>
        body {
            background-color: rgb(18, 19, 20);
            color: rgb(189, 190, 191);
        }
    </style>

</head>
<body>
    <h1>Hello, {{$name}}</h1>
    <form action="about" method="post">
        @csrf
        <input type="text" name="name" id="name"><br><br>
        <select name="departments" id="departments">
            @foreach ($departments as $key => $department)
                <option value="{{$key}}">{{$department}}</option>
            @endforeach
        <!--
            <option value="1">Technical</option>
            <option value="2">Financial</option>
            <option value="3">Sales</option>
        -->
        </select><br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>
