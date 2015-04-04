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

<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><p class="white logged-in">Currently logged in as <span>ibenaven@usc.edu</span></p></li>
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
            <li><a href="panel.php">Control Panel</a></li>
            <li><a href="scheduler.php">Event Scheduler</a></li>
            <li><a href="unsubscriber.php">Easy Unsubscriber</a></li>
            <li class="active"><a href="recent.php">Recent Commands</a></li>
        </ul>
    </div>
    <div class="columns large-10">
        <div class="main-content">
            <h1>Recent Commands</h1>
            <h4>Your most recent commands made from your browser, phone, or pebble</h4>
            <hr />
            <p>4-4-2015 3:13am 		<span>Smart Plug 1 Turned ON</span></p>
            <p>4-3-2015 10:42pm 	<span>Smart Lock 1 LOCKED</span></p>
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
