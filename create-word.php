<?php session_start(); ?>
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
                    <?php
                    if(isset($_SESSION['errors'])){
                        echo "<span class='new badge red' data-badge-caption=''>{$_SESSION['errors']}</span>";
                        session_destroy();
                    }
                    ?>
                </div>
                <form class="col s12" action="p-create-word.php" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="word" type="text" class="validate" name="word">
                            <label for="word">Word</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="description" class="materialize-textarea" name="description"></textarea>
                            <label for="description">Description</label>
                        </div>

                        <div class="input-field col s12 right-align">
                            <button class="waves-effect waves-light btn" type="submit" name="submit">Save Word</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>