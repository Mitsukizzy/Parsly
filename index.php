<?php
session_unset(); 
session_start(); 
error_reporting(E_ALL);
ini_set('display_errors','1'); 
include_once('resources/library/parsly.php'); 
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
<body>
    <div class="absolute-center text-center inline-block">
        <img class="text-center hide" id="logo" src="img/logo_green.png" />
        <div class="hide" id="signup">
            <a class="button success" href="
		<?php
		echo connect();
		?>
		">Sign up</a>
        </div>
    </div>



<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
<script src="js/splash.js"></script>
</body>
</html>
