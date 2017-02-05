<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id'])){
        require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/word.class.php";
        $obj_word = new Word();
        $deleted = $obj_word->deleteWord($_GET['id']);
        if($deleted){
            header("Location: index.php");
        }else{
            echo "Deletion failed!";
        }
    }
}else{
    header("Location: index.php");
}