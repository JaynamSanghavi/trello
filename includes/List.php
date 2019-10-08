<?php
    include_once("classes/List.class.php");
    $list = new cardList();
    $result_set = $list->readList();
    while($row = mysqli_fetch_assoc($result_set)){
?>
<div class="list" >
                <h3 class="list-title"><?php echo $row['list_title'];?></h3>
                <ul class="list-items" id="list<?php echo $row['list_id'];?>">
                    <li id="1234">
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
                <button type="button" class="add-card-btn btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add a card</button>
            </div>
<?php
    }
?>
