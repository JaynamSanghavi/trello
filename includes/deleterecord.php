<?php
    include_once("../classes/ListItem.class.php");
    include_once("../classes/Functions.class.php");
    if(isset($_GET['id'])){
         $newListItem = new ListItem();
         $newListItem->deleteItem($_GET['id']);
        //Functions::redirect("../index.php");

    }else{
        echo "die";
  