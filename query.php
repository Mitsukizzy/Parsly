<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1');
include_once('resources/library/class.contextio.php');
include_once('resources/library/parsly.php');
$contextIO  = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');

//$messageListResponse = $contextIO->listMessages('552149c8df71abbc618b4568', array('label' => '0', 'folder' => 'Inbox'));
//var_dump($messageListResponse); 
//$messages = $messageListResponse->getData();
//var_dump($messages); 
//shell_exec("python resources/gmail.py 'You have a flight on April 7th 8PM with Southwest Airlines. CONFIRMATION#:858NNT'");
//echo "Success"; 
	$admin = '4017827413@tmomail.net'; 
	$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
	while(true)
	{
		sleep(2); 
		$messageListResponse = $contextIO->listMessages('552149c8df71abbc618b4568', array('label' => 0, 'folder' => 'Inbox', 'limit' => '25', 'include_body' => '1'));
                $messages = $messageListResponse->getData();
                echo $messages; 
		foreach($messages as $message)
                {
			if($message['addresses']['from'][0]['name'] === $admin)
                        {
				if(stripos($message['bodies'][0]['content'],'itinerary') !== false)
				{
					//shell_exec("python resources/email.py 'You have a flight on April 7th 8PM with Southwest Airlines. CONFIRMATION#:858NNT'");
				break;
				echo "success!"; 
				}
                        }
                }
		//echo 'Running...'; 	 
	}
?>
