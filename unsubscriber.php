<?php
session_start();
include_once('resources/libaries/class.contextio.php'); 
error_reporting(E_ALL); 
ini_set( 'display_errors','1');

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
            <li><a href="scheduler.php">Event Scheduler</a></li>
            <li class="active"><a href="unsubscriber.php">Easy Unsubscriber</a></li>
            <!--<li><a href="recent.php">Recent Commands</a></li>-->
        </ul>
    </div>
    <div class="columns large-10">
        <div class="main-content">
	   <h1>Easy Unsubscriber</h1>
            <h4>We gather the unsubscribe links of frequent senders so you don't have to search for them.</h4>
            <hr />
	    <div  class = 'unsub-row'>
	    	<a href = "Numberonejobsite.com" class ='large-8 inline-block website' >Number One Job Site </a> 
		<a href = "http://alerts.numberonejobsite.com/wf/unsubscribe?upn=mSmPH8rKtKnNviZeKAYpz2cvoyQ1vP1-2BR1YyT3D0xlbTuPFPPDbq91-2Bh4LhjLizkpnRW2qdM8RSmAC-2BlHHAivibCb5Afp8nWucTC-2FfYnHdKzjtzivjPM6JckeFbXxiBW1uB8vLcqXzOQa8wCHMc5j4i4nQtMoWI975tOIbJnU3xiecZ0SfMEPKrhjbxcb5yVS1Nw3K1p97EwhNaW27-2Ff5S9dBt8nx5EepVOo9w6-2BMxXW-2FIHK5v9mfEGWjPmtB2eP"  class='large-2 inline-block button round alert'>Unsubscribe</a>
		</div> http://cinema.usc.edu/unsubscribe/
	<div  class = 'unsub-row'>
                <a href = "http://cinema.usc.edu" class ='large-8 inline-block website' >USC Cinematic Arts </a>
                <a href = "http://cinema.usc.edu/unsubscribe/"  class='large-2 inline-block button round alert'>Unsubscribe</a>   
            </div> 
            <?php
	    	//echo $_SESSION['id']; 
		include_once('resources/library/class.contextio.php'); 
		include_once('resources/library/parsly.php'); 
		$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
		$messageListResponse = $contextIO->listMessages($_SESSION['id'], array('label' => 0, 'folder' => 'Inbox', 'limit' => '10', 'include_body' => '1')); 
		//var_dump($messageListResponse);
	
		
		$messages = $messageListResponse->getData();
		

		foreach($messages as $message)
		{
			if(containsUnsubscribe($message['bodies'][0]['content']))
			{
				if(empty($message['addresses']['from'][0]['name']))
				{
				$name = $message['addresses']['from'][0]['email'];
				}
				else
				{
				$name = $message['addresses']['from'][0]['name']; 
				}
				echo "<div class = 'unsub-row'>";
				echo "<a href ='' class ='large-8 inline-block website'>".$name."</a>"; 
				echo "<a href='".getUnsubscribeLink($message['bodies'][0]['content'])."' class='large-2 inline-block button round alert'>Unsubscribe</a>";
				echo "</div>";
			}
		}
	    ?>
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
