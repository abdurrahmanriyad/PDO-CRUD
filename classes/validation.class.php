<?php
class Validation{

    /**
     * checks for basic filter
     * @param string $string
     * @return string
     */
    public function filterInput($string = ""){
        $_string = $string;
        $_string = stripslashes($_string);
        return htmlspecialchars($_string);

    }

    /**
     * checks if string is empty
     * @param $string
     * @return bool
     */
    public function isEmpty($string){
        $_string = trim($string, ' ');
        if(strlen($_string) == 0){
            return true;
        }else{
            return false;
        }
    }
}