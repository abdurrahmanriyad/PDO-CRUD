<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO|CRUD</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col m8 offset-m2 l6 offset-l3">
            <div class="row">
                <div class="center-align">
                </div>

                <?php

                if($_SERVER['REQUEST_METHOD'] == 'GET'):

                    if(isset($_GET['id'])):
                        require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/word.class.php";
                        $obj_word = new Word();
                        $word = $obj_word->getWordById($_GET['id']);
                        if(count($word) > 0):
                ?>
                    <form class="col s12" action="p-edit-word.php" method="post">
                        <div class="row">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                            <div class="input-field col s12">
                                <input id="word" type="text" class="validate" name="word" value="<?php echo $word[0]['word']; ?>">
                                <label for="word">Word</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea id="description" class="materialize-textarea" name="description"><?php echo $word[0]['description']; ?></textarea>
                                <label for="description">Description</label>
                            </div>

                            <div class="input-field col s12 right-align">
                                <button class="waves-effect waves-light btn" type="submit" name="submit">Save Word</button>
                            </div>
                        </div>
                    </form>

                <?php
                      endif;
                    endif;
                endif;

                ?>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>