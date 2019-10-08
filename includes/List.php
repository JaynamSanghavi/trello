<?php
    include_once("classes/List.class.php");
    $list = new cardList();
    $result_set = $list->readList();
    while($row = mysqli_fetch_assoc($result_set)){
?>
<div class="list" >
                <h3 class="list-title"><?php echo $row['list_title'];?></h3>
                <ul class="list-items" id="list<?php echo $row['list_id'];?>">
                    <?php
                        include_once("includes/ListItem.php");
                    ?>
                    <li id="1235">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title text-center">Senior interactions strategist</h6>
                                <div class="item-avatar float-left m-2">
                                    <img src="https://randomuser.me/api/portraits/med/men/9.jpg" alt="" class="rounded-circle">
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!</p>
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
                    <li id="1236">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title text-center">Senior interactions strategist</h6>
                                <div class="item-avatar float-left m-2">
                                    <img src="https://randomuser.me/api/portraits/med/men/9.jpg" alt="" class="rounded-circle">
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!</p>
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
                    <li id="1237">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title text-center">Senior interactions strategist</h6>
                                <div class="item-avatar float-left m-2">
                                    <img src="https://randomuser.me/api/portraits/med/men/9.jpg" alt="" class="rounded-circle">
                                </div>
                                <div class="item-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!</p>
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
                </ul>
                <input name="list1SortOrder" type="hidden" />
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
                    <form action="includes/ListItem.php" method="POSt">
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
