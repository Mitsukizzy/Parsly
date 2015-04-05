	<?php
	error_reporting(E_ALL);
	ini_set("display_errors",1); 
	include_once("class.contextio.php");


	//This function should clear out all tokens and accounts associated with our keys. 
	function flushTokens()
	{
		$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
		$listAccountTokensResponse = $contextIO->listConnectTokens(); 
		//var_dump($listAccountTokensResponse); 
		$accountListResponse = $contextIO->listusers(); 
		foreach($accountListResponse->getData() as $account)
		{
			$contextIO->deleteUser($account['id']); 
		}
		echo "Succesfully deleted"; 
	}

	//This makes the URL for connecting and doing OAuth
	function connect()
	{
		$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
		$addTokenResponse = $contextIO->addConnectToken(array('callback_url' => 'http://parsly.rocks/panel.php'));
		//get the redirect url from the response, and direct the user to it
		$redirectUrl = $addTokenResponse->getDataProperty('browser_redirect_url');
	//	$userListResponse = $contextIO->listusers()->getData();
	//	$latest = count($userListResponse); 
	//	$_SESSION['email'] = $userListResponse[$latest-1]['email_addresses'][0]; 
	//	$_SESSION['id'] = $userListResponse[$latest-1]['id'];
		return $redirectUrl; 
	}
	function setAccount()
	{
		$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
		$userListResponse = $contextIO->listusers()->getData();
		$latest = count($userListResponse);
		 $_SESSION['email'] = $userListResponse[$latest-1]['email_addresses'][0];
		 $_SESSION['id'] = $userListResponse[$latest-1]['id'];
		echo "SUCCESS";
	}
	//Gets 50 emails once you log in!	
	function getEmails($emailID)
	{
	$response = array(); 
	$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');	
	$messageListResponse = $contextIO->listMessages($emailID,array('label' => '0', 'folder' => 'Inbox', 'limit' => '50'));
	foreach($messageListResponse->getData() as $message)
	{
		array_push($response,array($message['subject'],$message['message_id'])); 
	}  
	return $response; 
	}
?>
