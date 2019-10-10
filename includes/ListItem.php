<?php
    include_once("../classes/ListItem.class.php");
    include_once("../classes/Functions.class.php");
    
    /**
     * 
     * It is called when we need to insert a new list item in db
     * 
     */

    if(isset($_POST['submit'])){
        extract($_POST);
        $newListItem = new ListItem();
        $newListItem->insertListItem($list_item_title,$list_item_content,$list_index,$author_id);
        Functions::redirect("../index.php");
    }

    /**
     * 
     * It is called when we need to edit a list item in db
     * 
     */

    if(isset($_POST['submitedit'])){
        extract($_POST);
        $newListItem = new ListItem();
        $newListItem->updateListItem($list_item_title,$list_item_content,$list_item_id);
        Functions::redirect("../index.php");
    }
?>