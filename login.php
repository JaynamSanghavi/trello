<?php
    include_once("classes/Session.class.php");
    Session::startSession();
    $_SESSION['login'] = 0;
?>
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

<button type="button" class="personal-btn btn pt-2" data-toggle="modal" data-target="#signinmodal">&nbsp;&nbsp;Sign in</button>
<button type="button" class="personal-btn btn pt-2" data-toggle="modal" data-target="#signupmodal">&nbsp;&nbsp;Sign up</button>
<div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color:black">Sign In</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="includes/User.php" method="post">
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <label for="title" style="color:black">Enter the username</label>
                <input type="text" id="card-title" name="username" class="form-control validate">

            </div>

            <div class="md-form mb-5">
                <label for="title" style="color:black">Enter the password</label>
                <input type="password" id="card-title" name="password" class="form-control validate">

            </div>
            <div style="text-align: center" class="md-form mb-5">
                <input type="submit" value="SIGN IN" name="submit" style="display: block;color:black; margin: 0 auto;">
            </div>
        </div>
    </form>
</div>
</div>
</div>



<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color:black">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="includes/User.php" method="post">
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <label for="title" style="color:black">Enter the username</label>
                <input type="text" id="card-title" name="username" class="form-control validate">

            </div>

            <div class="md-form mb-5">
                <label for="title" style="color:black">Enter the password</label>
                <input type="password" id="card-title" name="password" class="form-control validate">

            </div>
            <div style="text-align: center" class="md-form mb-5">
                <input type="submit" value="SIGN IN" name="submitsu" style="display: block;color:black; margin: 0 auto;">
            </div>
        </div>
    </form>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
