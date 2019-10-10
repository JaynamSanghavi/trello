<?php
    include_once("../classes/ListItem.class.php");
    include_once("../classes/List.class.php");
    include_once("../classes/Functions.class.php");
    
    /**
     * 
     * It would be called when click on the delete icon of list item
     * 
     */
    
    if(isset($_GET['id'])){
         $newListItem = new ListItem();
         $newListItem->deleteItem($_GET['id']);
        Functions::redirect("../index.php");

    }

    /**
     * 
     * It would be called when click on the delete icon of list 
     * 
     */

    if(isset($_GET['listid'])){
        $newList = new cardList();
        $newList->deleteList($_GET['listid']);
       Functions::redirect("../index.php");
   }
?>