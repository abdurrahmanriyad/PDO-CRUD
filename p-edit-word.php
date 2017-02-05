<?php
require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/validation.class.php";
require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/word.class.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['submit'])){

        $validation  = new Validation();
        $word        = $validation->filterInput($_POST['word']);
        $description = $validation->filterInput($_POST['description']);

        if($validation->isEmpty($word) != true && $validation->isEmpty($description) != true){
            $obj_word = new Word();
            $update = $obj_word->updateWord($_POST['id'], $word, $description);
            if(!$update){
                header('Location: edit-word.php?id='.$_POST['id']);
            }else{
                header('Location: index.php');
            }
        }else{
            header('Location: create-word.php');
        }
    }

}else{
    header('Location: index.php');
}