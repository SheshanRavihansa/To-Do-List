<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Task</title>
    <script src="https://kit.fontawesome.com/4b89e33691.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/assets/style.css" />
</head>

<body>
    <div class="container">
        <h1>Edit Task</h1>
        <div class="todo-wrapper">
            <div class="todo-box">
                <form id="my_form" action="<?php $GLOBALS['site_url'] ?>/update" method="POST">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <textarea name="edited-task"><?= $task['task'] ?></textarea>
                </form>
            </div>
            <div class="add-new">
                <a href="javascript:{}" onclick="document.getElementById('my_form').submit();"><i class="fa-solid fa-floppy-disk"></i></a>
            </div>

        </div>
    </div>
</body>

</html>