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
        <section class="board-info-bar">
            <div class="board-controls">
                <button class="board-title btn pt-2">
                    <h2>Web Development</h2>
                </button>
            </div>
        </section>
        <!-- End of board info bar -->

        <!-- Lists container -->
        <section class="lists-container">
        <?php
            include_once("includes/List.php");
        ?>

            
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
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
                    <input type="text" id="card-title" name="list_item_title"   class="form-control validate">
                    
                </div>
                <div class="md-form mb-5">
                    <label for="content">Enter the content </label>
                    <textarea type="text" id="card-content" name="list_item_content" class="md-textarea form-control" rows="4"></textarea>
                </div>

                <div style="text-align: center"  class="md-form mb-5">
                        <input type="text" value="<?php echo 1;?>" name="list_index" hidden>
                </div>

                <div style="text-align: center"  class="md-form mb-5">
                        <input type="submit"s value="ADD" name="submit"  style="display: block; margin: 0 auto;">
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
        <script src="asset/custom.js"></script>
    </body>
</html>
