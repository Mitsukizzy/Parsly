<?php
session_start();
error_reporting(E_ALL);
ini_set( 'display_errors','1');
require_once('resources/library/parsly.php');

if( !isset( $_SESSION['id']) || !isset($_SESSION['email']))
{
        setAccount();
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Parsly | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
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
                    <a href="#"><img class="logo" src="img/logo2.png" /></a>
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
            <hr />
            </div>
	<div class = "category">
		<h3><a href = 'https://www.southwest.com/flight/view-air-reservation.html?confirmationNumber=858NNT&confirmationNumberLastName=TRUONG&confirmationNumberFirstName=STEVEN%20NHAN&RMID=PROD_Purchase_V6&RRID=U1RFVkVOVFJAVVNDLkVEVQ..&src=MAILTXNCONF0EMAIL110715'>Southwest Airlines Flight (8RQNN2) </a><h3>
		<p> Tuesday, April 10th , 2015 at 8:25pm LAX Los Angeles, California</p>
	</div>
	        <?php
                include_once('resources/library/class.contextio.php');
                include_once('resources/library/parsly.php');
                $contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
                $messageListResponse = $contextIO->listMessages($_SESSION['id'], array('label' => 0, 'folder' => 'Inbox', 'limit' => '15', 'include_body' => '1'));
                $messages = $messageListResponse->getData();
                foreach($messages as $message)
                {
                        if(containsEventbrite($message['addresses']['from'][0]['email']))
                        {
                                echo "<div class = 'category'>";
                                echo "<h3><a href ='".getFirstLink($message['bodies'][0]['content'])."'>".$message['subject']."</a></h3>"; 
                                echo "<div class='columns columns-special large-12'>";
                        	echo formattedInfo($message['bodies'][0]['content']);
                    		echo "</div>";
                   		echo "</div>";
				
                        }
                }
            ?>      </div>
    </div>
</div>


<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>

</html>
