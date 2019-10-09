<?php
    if(isset($_POST['logout'])){
        include_once('classes/User.class.php');
        include_once('classes/Functions.class.php');
        $user = new User();
        $user->user_logout();
        Functions::redirect('login.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="asset/index.css">
</head>

<body class="px-4">
    <!-- Board info bar -->
    <?php
      $var = "";
    ?>
    <section class="board-info-bar">
        <div class="board-controls">
            <button class="board-title btn pt-2">
                <h2 class="m-0">Web Development !</h2>
            </button>
            <?php
            include_once("classes/Session.class.php");
            include_once("classes/Functions.class.php");
            Session::startSession();
                if($_SESSION['login'] == 1){
                ?>
                        <form method="POST" action=''>
                            <input type="submit" name="logout" class="add-list-btn btn"  value="Logout">
                        </form> 
                    <?php
                }else{
                    Functions::redirect("login.php");
                }
            ?>
            
        </div>
    </section>
    <!-- End of board info bar -->

    <!-- Lists container -->
    <?php
        if(true){

        ?>
        <section class="lists-container">
        <?php
            include_once("classes/List.class.php");
            include_once("classes/Functions.class.php");
            $list = new cardList();
            $result_set = $list->readList();
            $var ="";
            while($row = mysqli_fetch_assoc($result_set)){
            ?>
            
            <div class="list" >
                <h3 class="list-title"><?php echo $row['list_title'];?></h3>
                <ul class="list-items" id="list<?php echo $row['list_id'];?>">
                    <?php
                        $var = $var .'#list' . $row['list_id'] . ',';
                        include_once("classes/ListItem.class.php");
                        $listitem = new ListItem();
                        $listitem_resultset = $listitem->readListItem((int)$row['list_id']);
                        while($row_item = mysqli_fetch_assoc($listitem_resultset)){
                    ?>
                    <li id="<?php echo $row_item['list_item_id'];?>">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title text-center"><?php echo $row_item['list_item_title'];?> </h6>
                                <button type="button" class="add-card-btn btn" data-toggle="modal" data-target="#<?php echo $row['list_id']?>"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;</button>
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
        <button type="button" class="add-list-btn btn" data-toggle="modal" data-target="#listmodal"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add a List</button>
        
<div class="modal fade" id="listmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Add a List</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="includes/List.php" method="post">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <label for="title">Enter the title </label>
                                <input type="text" id="card-title" name="list_title" class="form-control validate">

                            </div>
                            <div style="text-align: center" class="md-form mb-5">
                                <input type="submit"  value="ADD" name="submit" style="display: block; margin: 0 auto;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End of lists container -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="asset/DragSort.js"></script>
    <script>
        $("<?php echo substr($var,0,strlen($var)-1); ?>").dragsort({ dragSelector: "div", dragBetween: true, dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });

        <?php
            $temp = explode(",",$var);
            foreach($temp as $str){
            ?>
            function saveOrder() {
                var data = $("<?php echo $str; ?> li").map(function() { return $(this).attr('id'); }).get();
                $("input[name=list1SortOrder]").val(data.join("|"));
            };
        <?php
            }
        ?>
                
    </script>

        <?php
        }
    ?>
    </body>

</html>