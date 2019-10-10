<?php
    include_once("../classes/List.class.php");
    include_once("../classes/Functions.class.php");
    
    /**
     * 
     * It is called when we need to insert a new list in db
     * 
     */
    if(isset($_POST['submit'])){
        extract($_POST);
        $list = new cardList();
        $list->insertList($list_title);
        Functions::redirect("../index.php");
    }  

    /**
     * 
     * It is called when we need to edit a list in db
     * 
     */

    if(isset($_POST['submitedit'])){
        extract($_POST);
        $newList = new cardList();
        echo $newList->updateList($list_title,$list_index);
        Functions::redirect("../index.php");
    }
?>
