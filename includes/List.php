<?php
    include_once("../classes/List.class.php");
    include_once("../classes/Functions.class.php");
    if(isset($_POST['submit'])){
        extract($_POST);
        $list = new cardList();
        $list->insertList($list_title);
        Functions::redirect("../index.php");
    }
    $list = new cardList();
    $result_set = $list->readList();
    $var ="";
    while($row = mysqli_fetch_assoc($result_set)){
?>
<?echo "hello in list"; ?>
<div class="list" >
                <h3 class="list-title"><?php echo $row['list_title'];?></h3>
                <ul class="list-items" id="list<?php echo $row['list_id'];?>">
                    <?php
                        $var = $var .'#list' . $row['list_id'] . ',';
                        include_once("../classes/ListItem.class.php");
                        $listitem = new ListItem();
                        $listitem_resultset = $listitem->readListItem((int)$row['list_id']);
                        while($row_item = mysqli_fetch_assoc($listitem_resultset)){
                    ?>
                    <li id="<?php echo $row_item['list_item_id'];?>">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title text-center"><?php echo $row_item['list_item_title'];?></h6>
                                <!-- <div class="item-avatar float-left m-2">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row_item['author_picture'])?>" alt="" class="rounded-circle">
                                </div> -->
                                <div class="item-content">
                                    <p class="item-post-name">@<?php echo $row_item['author_name'];?></p>
                                    <p><?php echo $row_item['list_item_content'];?></p>
                                </div>
                                <div class="item-footer clearfix">
                                    <div class="item-right">
                                        <a href="#"><i class="fas fa-check"></i></a>
                                        <div class="item-small-avatar">
                                            <img src="https://randomuser.me/api/portraits/thumb/men/10.jpg" alt="avatar-right">
                                        </div>
                                        <div class="item-small-avatar">
                                            <img src="https://randomuser.me/api/portraits/thumb/men/11.jpg" alt="avatar-right">
                                        </div>
                                        <div class="item-small-avatar">
                                            <img src="https://randomuser.me/api/portraits/thumb/men/12.jpg" alt="avatar-right">
                                        </div>        
                                    </div>
                                    <div class="item-wrong">
                                        <a href="#"><i class="fas fa-times"></i></a>
                                        <div class="item-small-avatar">
                                            <img src="https://randomuser.me/api/portraits/thumb/men/13.jpg" alt="avatar-wrong">
                                        </div>
                                    </div>
                                </div>      
                            </div>
                        </div>                       
                    </li>
                    <?php
                        }
                    ?>
                </ul>
                <input name="list<?php echo $row['list_id'];?>SortOrder" type="hidden" />
                <button type="button" class="add-card-btn btn" data-toggle="modal" data-target="#myModal<?php echo $row['list_id']?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add a card</button>
            </div>
            <div class="modal fade" id="myModal<?php echo $row['list_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Add a card</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="includes/ListItem.php" method="post">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <label for="title">Enter the title </label>
                                <input type="text" id="card-title" name="list_item_title" class="form-control validate">

                            </div>
                            <div class="md-form mb-5">
                                <label for="content">Enter the content </label>
                                <textarea type="text" id="card-content" name="list_item_content" class="md-textarea form-control" rows="4"></textarea>
                            </div>

                            <div style="text-align: center" class="md-form mb-5">
                                <input type="text" value="<?php echo $row['list_id']; ?>" name="list_index" hidden>
                            </div>

                            <div style="text-align: center" class="md-form mb-5">
                                <input type="text" value="<?php echo $_SESSION['author_id']; ?>" name="author_id" hidden>
                            </div>

                            <div style="text-align: center" class="md-form mb-5">
                                <input type="submit" s value="ADD" name="submit" style="display: block; margin: 0 auto;">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
    }
?>
