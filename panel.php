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
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>
</head>
<body id="body" class="hide">

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
                    <a href="#"><img class="logo" src="img/logo2.png" /></a>
                </li>
            </ul>
        </section>
    </nav>
</div>
<div class="row">
    <div class="columns large-2">
        <ul class="side-nav">
            <li class="active"><a href="panel.php">Control Panel</a></li>
            <li><a href="scheduler.php">Event Scheduler</a></li>
            <li><a href="unsubscriber.php">Easy Unsubscriber</a></li>
            <li><a href="recent.php">Recent Commands</a></li>
        </ul>
    </div>
    <div class="columns large-10">
        <div class="main-content">
            <h1>Control Panel</h1>
            <h4>Configure your device settings here. SmartThings found: <span>3</span></h4>
            <hr />
            <div class="smart-thing">
                <h5>Smart Plug 1</h5>
                <div class="switch radius">
                    <input id="exampleRadioSwitch1" type="radio" name="testGroup">
                    <label for="exampleRadioSwitch1">ON</label>
                </div>
            </div>

            <div class="smart-thing">
                <h5>Smart Plug 1</h5>
                <div class="switch radius">
                    <input id="exampleRadioSwitch2" type="radio" name="testGroup">
                    <label for="exampleRadioSwitch2">ON</label>
                </div>
            </div>

            <div class="smart-thing">
                <h5>Smart Plug 1</h5>
                <div class="switch radius">
                    <input id="exampleRadioSwitch3" type="radio" name="testGroup">
                    <label for="exampleRadioSwitch3">ON</label>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).ready(function() {
        $('#body').fadeIn(2000);
    });
    $(document).foundation();
</script>
</body>
</html>
