<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Heroes SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
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
                    <form class="login-form" name="v-form" method="post" action="php/register.php">

                        <h4 class="form-heading">SIGN UP</h4>


                        <input type="text" placeholder="Full Name" name="name" id="name" onchange="validateName()"><i class="fa fa-user fa-sm " aria-hidden="true"></i>


                        <div id="nameError" class="error" style="display: hidden;">&nbsp;</div>

                        <input type="text" placeholder="Email" name="email" id="email" onchange="validateEmail()"><i class="fa fa-envelope fa-sm " aria-hidden="true"></i>
                        <div id="emailError" class="error" style="visibility: hidden;">&nbsp;</div>

                        <input type="password" placeholder="password" name="password" id="password" onkeyup="validatePassword()"><i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        <div id="passwordError" class="error" style="visibility: hidden;">&nbsp;</div>

                        <input type="password" placeholder="Confirm Password" name="password" id="confirmPassword" onkeyup="validateConfirmPassword()"><i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                        <div id="confirmPasswordError" class="error" style="visibility: hidden;">&nbsp;</div>
                        <br>

                        <div class="check">
                            <div class="row">
                                <div class="col-md-6">

                                    <input type="submit" name="signup" class="log" id="submitBtn" value="SIGN UP" disabled>
                                </div>
                            </div>
                        </div>
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

                    </div>
                </div>
            </div>

        </div>

        <div class="box-footer">
            <div class="box-footer-text">
                <h4> Have an Account?</h4>
                <span>A Member already.... Login here</span>

                <a href="index.php">
                    <button>LOG IN</button>
                </a>

            </div>


        </div>
    </div>

    <footer>
        <br><br><br><br>
        <h6>Copyright © 2019 Heroes Org. All rights reserved.</h6>
        <br><br><br><br>
    </footer>



</body>

<script src="script/signupValidation.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>