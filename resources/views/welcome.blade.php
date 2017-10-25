<!doctype html>
<html>
    <head>

        <title>My First MVC</title>

    </head>
    <body>
    <ul>
        @foreach ($tasks as $task)
            <li> {{$task}}</li>
       @endforeach

    </ul>
    </body>
</html>
