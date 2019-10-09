<?php
    include_once("../classes/ListItem.class.php");
    include_once("../classes/Functions.class.php");
    
    if(isset($_POST['submit'])){
        echo "hello";
        extract($_POST);
        $newListItem = new ListItem();
        $newListItem->insertListItem($list_item_title,$list_item_content,$list_index,$author_id);
        Functions::redirect("../index.php");
    }
?>