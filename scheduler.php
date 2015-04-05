<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Parsly | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">

                <li><p class="white logged-in">Currently logged in as <span><?php
                            echo $_SESSION['email'];
                            ?></span></p></li>
                <li></li>
                <li class="has-dropdown">
                    <a href="#">Options</a>
                    <ul class="dropdown">
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="left">
                <li class="name">
                    <a href="#"><img class="logo" src="img/logo2.png"/></a>
                </li>
            </ul>
        </section>
    </nav>
</div>
<div class="row">
    <div class="columns large-2">
        <ul class="side-nav">
            <!--<li><a href="panel.php">Control Panel</a></li>-->
            <li class="active"><a href="scheduler.php">Event Scheduler</a></li>
            <li><a href="unsubscriber.php">Easy Unsubscriber</a></li>
            <!--<li><a href="recent.php">Recent Commands</a></li>-->
        </ul>
    </div>
    <div class="columns large-10">
        <div class="main-content">
            <h1>Event Scheduler</h1>
            <h4>A list of events we suggest based on your inbox mail</h4>
            <hr/>

            <div class="category">
                <h3><a href='https://www.facebook.com/l.php?u=https%3A%2F%2Fwww.southwest.com%2Fflight%2Fview-air-reservation.html%3FconfirmationNumber%3D858NNT%26confirmationNumberLastName%3DTRUONG%26confirmationNumberFirstName%3DSTEVEN%2BNHAN%26RMID%3DPROD_Purchase_V6%26RRID%3DU1RFVkVOVFJAVVNDLkVEVQ..%26src%3DMAILTXNCONF0EMAIL110715&h=OAQH5D83-'>Southwest Airlines Flight (8RQNN2) </a>
                    <h3>
                        <p> Tuesday, April 7th , 2015 at 8:00pm LAX Los Angeles, California</p>
            </div>

            <div class='category'>
                <h3><a href="http://r20.rs6.net/tn.jsp?f=0012wrj563p1GtDbOzlEu-0rN13ZpaX2IyYT-hBT7gwroYFigEH08kPIuRH9I0qVwfstFRFe3F6CxfVuAzekaPSuUQ-DYXzA7UxcnnQ-528C_R6cjEhSaKFb4Vu3grOYlXCcW9N5Rv5iHP2ZtxOfaULpYvsljqvr6nOCqjvl-2fZz1pvx5SNKj8LA==&c=NFiFYz8lYHu7uCAbCwo83UOVCJIY-RXVX-vgYBfq5waPBiwJEX1_9g==&ch=NzTLf5sRhP7UtyamIBMqSsjaqNOyrd93LPCu-1gjcluSdX_gP09mbw==">2015 Asian Pacific Graduate Celebration</a></h3>
                <p>Thursday, May 14, 2015, 8pm-10pm, Tutor Campus Center Ballroom. </p>
            </div>

            <div class="category">
                <h3><a href='http://www.teaconnect.org/Events-Education/index.cfm?eventid=144&eventsection=details'>TEA NextGen - Professional Networking Event - GibGab WEST </a>
                    <h3>
                        <p>April 16th, Glendale, CA</p>
            </div>

            <div class="category">
                <h3><a href='http://bit.ly/laser-confirm'>Laser Tag with USC ACM </a>
                    <h3>
                        <p>Friday, April 10th. Ultrazone Alhambra: 231 E Main St, Alhambra, California 91801.</p>
            </div>

            <div class="category">
                <h3><a href='http://uscacm.us6.list-manage.com/track/click?u=83452bf1d98fee32fefb2918c&id=e1032a4548&e=a7ba41a3d9'>ACM Web Design Foundations Workshop</a>
                    <h3>
                        <p>Tuesday, April 7th, 7-8:30 pm KAP 140</p>
            </div>

            <div class="category">
                <h3><a href='http://uscacm.us6.list-manage.com/track/click?u=83452bf1d98fee32fefb2918c&id=e210cab146&e=a7ba41a3d9'>H20.ai Machine Learning Workshop</a>
                    <h3>
                        <p>Wednesday, April 8th, 6pm VKC 150</p>
            </div>
        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>

</html>
