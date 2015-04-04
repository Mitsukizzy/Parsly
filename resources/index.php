<?php
include_once("resources/library/parsly.php");

//echo "<a href = '".connect('qd8cq03s','SogN0NW6RPJPkStv')."'>Click</a>"; 
//$_SESSION['token'] = $_GET['contextio_token']; 
$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv'); 
flushTokens(); 

/*if(!empty($_SESSION['token']))
{
	$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv'); 
	$userListResponse = $contextIO->listusers(); 
	$users = $userListResponse->getData();
	$user = $users[0];
	$folderListResponse = $contextIO->listEmailAccountFolders($user['id'], '0');
	foreach($folderListResponse->getData() as $folder)
	{
		echo "<b>".$folder['name']."</b>"; 
		echo "<ul>";
		$messageListResponse = $contextIO->listMessages($user['id'], array('label' => 0, 'folder' => $folder['name'], 'limit' =>5));
		$messages = $messageListResponse->getData();
		foreach($messages as $message)
		{
			echo "<li><b>From:</b>".$message['addresses']['from']['name']."<b>Subject</b>".$message['subject']."</li>"; 
		}
		echo "</ul>"; 
	}
}*/

?>