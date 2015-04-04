<?php
require_once("library/parsly.php");
require_once("library/class.contextio.php"); 
error_reporting(E_ALL);
session_start();  
ini_set('display_errors','1');

echo "<a href='".connect()."'>Sign in </a>"; 
if(isset($_GET['contextio_token']))
{
$_SESSION['token'] = $_GET['contextio_token']; 
}

$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');


//This just prints out the 5 most recent emails from every folder in a user's email account.
if(!empty($_SESSION['token']))
{ 
	$userListResponse = $contextIO->listusers(); 
	$users = $userListResponse->getData();
	$user = $users[count($users)-1]; 
	echo "<br><br>";
	echo "ID:".$user['id']; 
	var_dump(getEmails($user['id'])); 
	/*
	foreach($folderListResponse->getData() as $folder)
	{
		echo "<b>".$folder['name']."</b>"; 
		echo "<ul>";
		$messageListResponse = $contextIO->listMessages($user['id'], array('label' => 0, 'folder' => $folder['name'], 'limit' =>15));
		
		//var_dump($messageListResponse);
		
		$messages = $messageListResponse->getData();
		
		foreach($messages as $message);
		{
			$sender = $message['addresses']['sender'][0]['name'] !==NULL ? $message['addresses']['sender'][0]['name'] :$message['addresses']['sender'][0]['email'];
			echo "<li><b>From: </b>".$sender."<br><b>Subject: </b>".$message['subject']."</li>";
		}
		echo "</ul>"; 
	}*/
}
?>
