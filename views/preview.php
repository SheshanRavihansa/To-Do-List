<!DOCTYPE html>
<html lang="en">

<head>
    <title>To Do List</title>
    <script src="https://kit.fontawesome.com/4b89e33691.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../views/assets/style.css" />
</head>

<body>
    <div class="container">
        <h1>To-Do</h1>
        <div class="todo-wrapper">
            <?php foreach ($tasks as $todos) : ?>
                <div class="todo-box">
                    <!-- <h3><?php //echo $todos['id'] ?>.</h3> -->
                    <div class="content">
                        <div>
                            <?php echo $todos['task'] ?>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="<?= $GLOBALS['site_url'] ?>/edit/<?= $todos['id']?>"><i class="fa-solid fa-pen"></i></a>
                        <a href="<?= $GLOBALS['site_url'] ?>/delete/<?= $todos['id']?>"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <!-- add button -->
            <div class="add-new">
                <a href="<?= $GLOBALS['site_url'] ?>/add"><i class="fa-solid fa-plus"></i></a>
            </div>

        </div>
    </div>
</body>

</html>