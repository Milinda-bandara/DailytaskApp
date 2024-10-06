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

              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e($error); ?>

                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <form action="/savetask" method="post" >  
                    <?php echo e(csrf_field()); ?> 

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
                    <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($task->id); ?></td>
                        <td><?php echo e($task->task); ?></td>
                        <td>
                            <?php if($task->iscompleted): ?>
                            <button class="btn btn-success">Completed</button>
                            <?php else: ?>
                            <button class="btn btn-warning">Not completed</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if(!$task->iscompleted): ?>
                            <a href="/markascompleted/<?php echo e($task->id); ?>" class="btn btn-primary">Mark as completed</a>
                            <?php else: ?>
                            <a href="/markasnotcompleted/<?php echo e($task->id); ?>" class="btn btn-danger">Mark as not completed</a>
                            <?php endif; ?>
                            <a href="/deletetask/<?php echo e($task->id); ?>" class="btn btn-warning">Delete</a>
                            <a href="/updatetask/<?php echo e($task->id); ?>" class="btn btn-success">Update</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
           </div>
        </div>
    </div>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>    
</body>
</html><?php /**PATH C:\Users\WW\Desktop\laravel\DailytaskApp\resources\views/task.blade.php ENDPATH**/ ?>