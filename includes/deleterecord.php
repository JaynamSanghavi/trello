<?php
    include_once("../classes/ListItem.class.php");
    include_once("../classes/Functions.class.php");
    if(isset($_GET['id'])){
        extract($_GET);
        $newListItem = new ListItem();
        $newListItem->deleteItem($id);
        Functions::redirect("../index.php");

    }else{
        echo "die";
    }
?>