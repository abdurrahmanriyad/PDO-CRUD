<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO|CRUD</title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
    <div class="center-align">
        <h2>Word board</h2>
        <a href="create-word.php" class="waves-effect waves-light btn">Create Word</a> <br> <br>
    </div>
    <div class="grid">
        <div class="grid-sizer"></div>
            <?php
                require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/word.class.php";
                $obj_word = new Word();
                $words = $obj_word->getAllWord();
                foreach($words as $word):
            ?>
                <div class="grid-item">
                    <div class="card blue-grey lighten-5">
                        <div class="card-content black-text">
                            <div>
                                <a href="<?php echo "delete-word.php?id=".$word["id"]; ?>" class="red-text" title="delete"><i class="material-icons">delete_forever</i></a> &nbsp;
                                <a href="<?php echo "edit-word.php?id=".$word["id"]; ?>" class="red-text" title="Edit"><i class="material-icons">mode_edit</i></a>
                            </div>
                            <h5 class="card-title"><?php echo $word['word'] ?></h5>
                            <p>
                                <?php echo $word['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>

           <?php
                endforeach;
           ?>
    </div>


<!-- Compiled and minified JavaScript -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>