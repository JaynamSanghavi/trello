<?php
    include_once("../classes/List.class.php");
    include_once("../classes/Functions.class.php");
    if(isset($_POST['submit'])){
        extract($_POST);
        $list = new cardList();
        $list->insertList($list_title);
        Functions::redirect("../index.php");
    }  

    if(isset($_POST['submitedit'])){
        echo "hello";
        extract($_POST);
        $newList = new cardList();
        $newList->updateList($list_title,$list_id);
        //Functions::redirect("../index.php");
    }
?>
