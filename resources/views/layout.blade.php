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

    <style type=”text/css”>
        @media (min-width: 768px) {
            .container {
                width: 100%;
            }
        }
    </style>


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


    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    -->
    <script>

        $(document).on("click", ".open-DeleteDialog", function (event) {
            //var myBookId = $(this).data('id');
            //$(".modal-body #bookId").val( myBookId );

            //var myID= document.getElementById('taskId').value;
            //<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            //var thisTask =  $(this).attr('data-value');               //$tr.data('value');
            //alert(thisTask);

            // var id = thisTask->id;  //.data('id')
           // var button = $(event.relatedTarget); // Button that triggered the modal
           // var buttonID = $(this).attr('data-id');  //button.data('id') // Extract info from data-* attributes
          //  console.log('buttonID: '+buttonID);
            //alert(buttonID);
/*
            var task = $.parseJSON(thisTask);
            //var button = $(event.relatedTarget) // Button that triggered the modal
            alert('id: '+task['id']);
            alert('taskName: '+task['body']);
            alert('completed: '+task['completed']);
            alert('createAt: '+task['created_at']);
            //

            var myModal = $(this);

            myModal.find('.modal-header .modal-title').innerHTML ="Test Title4"; //('Delete Task ');
            myModal.find('.modal-body #taskID').innerHTML= task['id'];
            myModal.find('.modal-body #taskName').innerHTML = task['body'];
            myModal.find('.modal-body #completed').innerHTML = task['completed'];
            myModal.find('.modal-body #createAt').innerHTML = task['created_at'];
            //alert( myModal.find('.modal-body .taskID').value()   );
            myModal.modal('show');
            console.log( 'taskID' + document.getElementById('taskID').innerHTML );

*/      });
    </script>

</body>

</head>
</html>



