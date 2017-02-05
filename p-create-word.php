<?php
session_start();
session_regenerate_id(true);
$error = array();
require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/validation.class.php";
require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/word.class.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['submit'])){

        $validation  = new Validation();
        $word        = $validation->filterInput($_POST['word']);
        $description = $validation->filterInput($_POST['description']);

        if($validation->isEmpty($word) != true && $validation->isEmpty($description) != true){
            $obj_word = new Word();
            $insert = $obj_word->createWord($word, $description);
            if(!$insert){
                header('Location: create-word.php');
            }else{
                header('Location: index.php');
            }
        }else{
            $_SESSION['errors'] .= "Fields can't be empty!!";
            header('Location: create-word.php');
        }
    }

}else{
    header('Location: index.php');
}