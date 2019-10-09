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
                <h2 class="m-0">Web Development</h2>
            </button>
            <?php
            include_once("classes/Session.class.php");
            Session::startSession();
                if($_SESSION['login'] == 1){
                ?>
                        <form method="POST" action=''>
                            <input type="submit" name="logout" class="add-list-btn btn"  value="Logout">
                        </form> 
                    <?php
                }
            ?>
            
        </div>
    </section>
    <!-- End of board info bar -->

    <!-- Lists container -->
    <?php
    echo "hi";
    echo $_SESSION['login'];
        if(true){

        ?>
        <section class="lists-container">
        <?php
        require_once("includes/List.php");
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