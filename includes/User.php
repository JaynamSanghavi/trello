<?php
    include_once("../classes/User.class.php");

    /**
     * 
     * It is called when user entered name an password 
     * and process login will be call from here
     * It it return false , flagwil set to 1 
     * 
     */

    if(isset($_POST['submit'])){
        extract($_POST);
        $obj = new User();
        if( $obj->processLogin( $username, $password)){
            echo $_SESSION['login'];
            Functions::redirect("../index.php");
        }else{
            $flag = 1;
        }
    }
    /**
     * 
     * It is called when new user is created.
     * It something went wrong will calling the method , the flag is set to 1
     * 
     */
    else if(isset($_POST['submitsu'])){
        extract($_POST);
        $obj = new User();
        if($obj->insertUser($username,$password)){
            Functions::redirect("../login.php");
        }else{
            $falg = 1;
        }

    }
?>
<?php
                    if ($flag) {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Wrong Username or Password Please try again later!
                        </div>
                        <?php
                    }
                    ?>