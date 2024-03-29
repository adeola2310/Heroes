<?php require_once ('includes/session.php');?>
<?php require_once ('includes/functions.php');?>
<?php confirm_logged_in();?>

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


            <div class="home-box">

                <div class="logo">
                    <img src="https://res.cloudinary.com/ddtech/image/upload/v1568622070/Team%20Heroes/team_heroes_logo_y2hlv4.png" alt="team-logo">

                </div>
                <div class="home-img">
                    <img src="https://res.cloudinary.com/oluwamayowaf/image/upload/v1568767225/Team%20Heroes%20Log%20In/Vector_x5kb7p.png">
                </div>

                <div class="home-text">
                <h5 style="padding-bottom:0.5em">Hi! <?php echo $_SESSION['name']; ?></h5>
                
                    <h4 style="padding-bottom:0.5em">Welcome to Team Heroes</h4>
                    

                    <p>Are you ready for the adventure that lies ahead?</p>
                </div>

            </div>

        </div>

        <div class="box-footer" >
            <div class="box-footer-text" style="display:block">
                <h4> &nbsp;</h4>
                <span>&nbsp;</span>
                <div>
                    <a href="logout.php">
                        <button>LOGOUT</button>
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