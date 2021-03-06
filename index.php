<?php
session_start();
require_once "database/dbConnection.php";
include 'server/insert_signup.php';
include 'server/read_login.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Connect X</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Freelancing">
    <meta name="keywords" content="online jobs,earn money online">
    <meta name="author" content="Asad Ullah Awan">
    <meta name="author" content="Rimsha Imran">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/w3Schools.css">
    <link rel="stylesheet" href="css/loginSignup.css">
    <link rel="stylesheet" href="css/responsiveMenu.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        input[class="validity"]:valid {
            background-color: limegreen;
        }


    </style>
</head>
<body>

<!-- Navigation bar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-card">
        <a href="#home" class="w3-bar-item w3-button"><img src="images/ConnectXlogo.png" width="100" alt=""></a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="#home" class=" w3-button">Home</a>
<!--        <a href="#projects" class="w3-bar-item w3-button">Projects</a>-->
            <a href="#about" class=" w3-button">About</a>
            <a href="#contact" class=" w3-button">Contact</a>
            <button onclick="document.getElementById('login').style.display='block'" style="width:auto; color: #4CAF50;" class=" w3-button"> Login </button>
            <button onclick="document.getElementById('signup').style.display='block'" style="width:auto; color: red;" class="w3-button">Sign Up</button>
            <!--Search Bar html-->
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                </form>
            </div>

        </div>
    </div>

        <div class ="w3-left" style="float: right;">
            <ul>
                <li class="dropdown w3-hide-medium w3-hide-large" style="float: right;">
                    <a href="javascript:void(0)" class="dropbtn"> <i class="fas fa-bars"></i></a>
                    <div class="dropdown-content">
                        <a href="#home">Home</a>
                        <!--        <a href="#projects" class="w3-bar-item w3-button">Projects</a>-->
                        <a href="#about" >About</a>
                        <a href="#contact" >Contact</a>
                        <button onclick="document.getElementById('login').style.display='block'" style="width:auto; color: #4CAF50;" class="w3-button" > Login </button>
                        <button onclick="document.getElementById('signup').style.display='block'" style="width:auto; color: red;" class="w3-button" >Sign Up</button>
                        <!--Search Bar html-->
                        <div class="search-container">
                            <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- Login form-->
<div id="login" class="modal">

    <form class="modal-content animate" action="index.php" method="post">
        <div class="imgcontainer">
            <img src="images/ConnectXlogo.png" alt="" style=" width:200px;">
            <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close">&times;</span>
        </div>

        <div class="containerls">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required pattern="^\w+(?:\.|\-|_)?\w+$">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required pattern="^\w{8,}$">
            <button type="submit" name="login">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <div id="error"><?php echo $msg;?></div>
        </div>


        <div class="containerls" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtnlg">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<!--Sign up from-->
<div id="signup" class="modal">
    <form class="modal-content" action="index.php" method="post">
        <div class="imgcontainer">
            <img src="images/ConnectXlogo.png" alt="" style=" width:200px;">
            <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close">&times;</span>
        </div>
        <div class="containerls">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="uname"><b>Username</b></label>
            <input type="text" class="validity" placeholder="Enter Username" name="uname" required pattern="^\w+(?:\.|\-|_)?\w+$">
            <label for="email"><b>Email</b></label>
            <input type="text" class="validity" placeholder="Enter Email" name="email" required pattern="^[a-z0-9_\-\.]+@\w+\.\w+\.?\w+$">

            <label for="psw"><b>Password</b></label>
            <input type="password" class="validity" placeholder="Enter Password" name="psw" required pattern="^\w{8,}$">

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" class="validity" placeholder="Repeat Password" name="psw-repeat" required pattern="^\w{8,}$">

            <label for="dob"><b>DOB</b></label>
            <input type="date"  placeholder="Enter DOB" name="dob" required pattern="^([0-9]{2})\/([1-9]{1}|[10-12]{2})\/([0-9]{4})">

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div>
                <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn" >Cancel</button>
                <button type="submit" name="signupbtn" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

<!--Login & signup script-->
<script>
    // Get the modal
    var modal = document.getElementById('login');
    var modal1 = document.getElementById('signup');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal||event.target == modal1) {
            modal.style.display = "none";
            modal1.style.display="none";
        }
    }
</script>

<!-- Page content -->
<div class="w3-container w3-padding-32" id="home">

    <div class="responsive">
        <iframe width="700" height="394"
                src="https://www.youtube.com/embed/U5WsK-UNK6U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>

</div>


    <!-- About Section -->
<div class="w3-container w3-padding-32" id="about" style="background-image: url('images/aboutbackground1.png'); background-repeat: no-repeat; background-position: right; height: 738px">
    <h2>About</h2>
    <h5>We are Creative</h5>
    <h4><b>We Focus On Digital Design Solutions </b></h4>
    <div class="w3-col l3 m6 w3-margin-bottom">
        <p>Growth in technology use has increased the demand of digital solutions. These solutions help you in your
            daily life. As we offer a platform that not only fulfils your technical needs but also allows you to sell your
            technology related services.
        </p>
        <h5><b>Who Are We?</b></h5>
        <p>   We are a platform that provides a connection to market any time any where with efficient, cost-effective,
            result-driven services to connect your small business website to a world of customers
            and exceed your every expectation.
        </p>
        <h5><b>What makes us different ?</b></h5>
        <p>  We have years of online marketing experience and have successfully helped businesses in a wide variety of markets with improving their online presence and increasing sales.
            Through our knowledge and experience, we’ll work closely with you to craft an online marketing campaign that will help further establish your brand and drive more targeted traffic to your website.
        </p>
    </div>
</div>

<br><br>
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Our Team</h3>
<div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
<!--        <img src="mypic.jpg" alt="" style="width:100%">-->
        <h3>Asad Ullah</h3>
        <p class="w3-opacity">Team Lead</p>
        <p> Team Members </p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
<!--        <img src="mypic.jpg" alt="" style="width:100%">-->
        <h3>Rimsha Imran</h3>
        <p class="w3-opacity">Team Member</p>
        <p> Team Members </p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>

</div>


    <!-- Contact Section -->
<div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
        <input class="w3-input w3-section w3-border" type="text" class="validity" placeholder="Email" required name="Email" pattern="^[a-z0-9_\-\.]+@\w+\.\w+\.?\w+$">
        <input class="w3-input w3-section w3-border" type="text"  class="validity"placeholder="Subject" required name="Subject" pattern="^.*$">
        <input class="w3-input w3-section w3-border" type="text" class="validity" placeholder="Comment" required name="Comment" pattern="^.*$">
        <button class="w3-button w3-black w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
    </form>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.8099120525735!2d74.26604291513615!3d31.446899681394004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1555879330612!5m2!1sen!2s" width="1230" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<!-- End page content -->

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
    <div id="social">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://pk.linkedin.com/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>
    <p>Powered by <a href="#home" title="Connect X" target="_blank" class="w3-hover-text-green">Connect X</a></p>
</footer>

</body>
</html>
