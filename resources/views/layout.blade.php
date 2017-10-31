<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>My First MVC / Layout </title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/navbar/navbar.css" rel="stylesheet">
</head>

<body>

    @include('layouts.nav')

    <div class="container">
        @yield('content')
    </div>
   <!--div class="container d-flex justify-content-between">
        <form action="/tasks" method="post">

            <div class="form-group">
                // csrf_field() }}
                <label for="taskTitle">Task Title</label>
                <input type="text" class="form-control" id="taskTitle" name="body">
            </div>
            <div class="form-group">
                <label for="taskStatus">Task Status</label>
                <select class="form-control" id="taskStatus" name="completed" selected="0">
                    <option value="0">Incomplete</option>
                    <option value="1">Complete</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

        </form>
   </div-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>


</body>

</head>
</html>



