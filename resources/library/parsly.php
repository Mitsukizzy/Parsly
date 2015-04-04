	<?php
	include_once("class.contextio.php");


	//This function should clear out all tokens and accounts associated with our keys. 
	function flushTokens()
	{
		$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
		$listAccountTokensResponse = $contextIO->listConnectTokens(); 
		//var_dump($listAccountTokensResponse); 
		$accountListResponse = $contextIO->listAccounts(); 
	}

	//This makes the URL for connecting and doing OAuth
	function connect()
	{
		$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
		$addTokenResponse = $contextIO->addConnectToken(array('callback_url' => 'http://parsly.rocks/panel.php'));
		//get the redirect url from the response, and direct the user to it
		$redirectUrl = $addTokenResponse->getDataProperty('browser_redirect_url');
		return $redirectUrl; 
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
