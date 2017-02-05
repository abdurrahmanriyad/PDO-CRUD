<?php
class Word{

    private $obj_database = '';

    public function __construct(){
        require_once $_SERVER['DOCUMENT_ROOT']."/pdo/classes/database.class.php";
        $this->obj_database = new Database();
    }

    /**
     * creates new word
     * @param string $word
     * @param string $desc
     * @return bool
     */
    public function createWord($word = '', $desc = ''){

        $insert = $this->obj_database->connection->prepare("INSERT INTO word (word, description) VALUES (?, ?)");
        $affected_row = $insert->execute(array($word, $desc));
        if($affected_row > 0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * get all available word from database
     * @return PDOStatement
     */
    public function getAllWord(){
        return $this->obj_database->connection->query("SELECT * FROM word", PDO::FETCH_ASSOC);
    }

    /**
     * delete a word from database
     * @param string $id
     * @return bool
     */
    public function deleteWord($id = " "){
        $delete = $this->obj_database->connection->prepare("DELETE FROM word WHERE id = ?");
        $affected_row = $delete->execute(array($id));
        if($affected_row > 0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * get single word by id
     * @param string $id
     * @return mixed
     */
    public function getWordById($id=''){
        return $this->obj_database->connection->query("SELECT * FROM word WHERE id=".$id, PDO::FETCH_ASSOC)->fetchAll();
    }


    public function updateWord($id = " ", $word, $desc){
        $insert = $this->obj_database->connection->prepare("UPDATE word SET word = ?, description=? WHERE id = ?");
        $affected_row = $insert->execute(array($word, $desc, $id));
        if($affected_row > 0){
            return true;
        }else{
            return false;
        }
    }
}