<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update task</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <br><br><br>
        <form action="/updatetasks" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="text" class="form-control" name="task" value="<?php echo e($taskdata->task); ?>"/>
            <input type="hidden" name="id" value="<?php echo e($taskdata->id); ?>"/>
            <br>
            <input type="submit" class="btn btn-warning" value="update"/>
           &nbsp;&nbsp; <input type="button" class="btn btn-danger" value="cancel"/>

        </form>
    </div>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>    
</body>
</html><?php /**PATH C:\Users\WW\Desktop\laravel\DailytaskApp\resources\views/updatetask.blade.php ENDPATH**/ ?>