<?php require_once('includes/session.php');?>
<?php require_once('includes/functions.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Heroes Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Londrina+Shadow|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://res.cloudinary.com/ddtech/image/upload/v1568622070/Team%20Heroes/Heroes_icon_ocfetd.png" type="image/x-icon">
    <script src="https://use.fontawesome.com/942fa82be2.js"></script>
</head>

<body>
    <div class="container">

        <div class="first-box">


            <div class="login-box">

                <div class="logo">
                    <img src="https://res.cloudinary.com/ddtech/image/upload/v1568622070/Team%20Heroes/team_heroes_logo_y2hlv4.png" alt="team-logo">

                </div>
                <div class="login-form-box">
                    <?php

                    if (isset($_REQUEST['login'])) {
                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        $password = md5($pass);

                        $json_data = file_get_contents('data.json');
                        $data = json_decode($json_data,true); //adding true turns it into an assoociative array

                        foreach ($data as $key => $value) {
                            if ($value['email'] == $email && $value['password'] == $password){
                                $_SESSION['email'] = $value['email'];
                                $_SESSION['name'] = $value['name'];

                                redirect_to("home.php");
                            }
                            else{
                                $message = "<p>Incorrect Login</p";
                                //redirect_to('index.php');
                            }


                        }


                    } else{
                        if (isset($_GET['logout']) && $_GET['logout'] == 1){
                            $message = "<p>You are now Logged out</p>";

                        }
                        //redirect_to('index.php');
                    }

                    ?>
                    <form class="login-form" name="v-form"  method="post" action="index.php">

                        <h4 class="form-heading">LOG IN</h4>


                        <input type="text" placeholder="Email" name="email" id="email" onchange="validateEmail()"><i class="fa fa-envelope" aria-hidden="true"></i>
                        <div id="email_error" class="val_error"></div>
                        <br>
                        <input type="password" placeholder="Password" name="password" id="password" onkeyup="validatePassword()"><i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        <div id="password_error" class="val_error"><?php if (!empty($message)) echo $message; ?></div>
                        <br>

                        <input type="submit" name="login" class="log" id="login" value="LOG IN" disabled>

                        <br>
                    </form>

                </div>


                <div class="social-icon" style="clear: both;">
                    <div class="row">
                        <div class="col-md-6" style="display:inline">
                            <p>Or Login Using:</p>
                            <ul>
                                <li><img src="icons/facebook.svg"></li>
                                <li><img src="icons/linkedin.svg"></li>
                                <li><img src="icons/twitter.svg"></li>
                            </ul>
                        </div>
                        <div class="col-md-6" style="float: right">

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="box-footer">
            <div class="box-footer-text">
                <h4> Dont have an Account yet?</h4>
                <span>A New User? Register with us...</span>
                <div>
                    <a href="signup.php">
                        <button>SIGN UP</button>
                    </a>
                </div>

            </div>


        </div>
    </div>

    <footer>
        <br><br><br><br>
        <h6>Copyright © 2019 Heroes Org. All rights reserved.</h6>
        <br><br><br><br>
    </footer>



</body>

<script src="script/signinValidation.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>