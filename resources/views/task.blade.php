<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1>Daily tasks</h1> 
           <div class="row">
            <div class="col-md-12">

              @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
              @endforeach


                <form action="/savetask" method="post" >  
                    {{csrf_field()}} 

                <input type="text" class="form-control"name="task"placeholder="Enter your task here">
                <br>
                <input type="submit" class="btn btn-primary" value="SAVE">
                <input type="reset" class="btn btn-warning" value="CLEAR">

                </form>
                <br><br>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <th>Action</th>
                    @foreach($task as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                            @if($task->iscompleted)
                            <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning">Not completed</button>
                            @endif
                        </td>
                        <td>
                            @if(!$task->iscompleted)
                            <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark as completed</a>
                            @else
                            <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark as not completed</a>
                            @endif
                            <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                            <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
           </div>
        </div>
    </div>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>    
</body>
</html>