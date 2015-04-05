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
		$addTokenResponse = $contextIO->addConnectToken(array('callback_url' => 'http://parsly.rocks/scheduler.php'));
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
	}
	//Assume unsubscribe link is the last link in the document
	function getUnsubscribeLink($input)
	{
		//print_r($html); 
		$input = substr($input, strripos($input,"http"));
		$input = substr($input, 0, stripos($input," ")); 
		//print_r($input); 
		return $input; 
		//print_r($input); 
		//print htmlentities($html); 
		//$doc->loadHTMLFile($html); 
		/*foreach($doc->getElementsByTagName('a') as $link)
		{
			if(stristr($link->textContent,'unsubscribe'))
			{
				return $link->getAttribute('href'); 
			}
		}*/
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
	function containsUnsubscribe($input)
	{
		return stripos(strtolower($input),'unsubscribe'); 
	}
       function containsEventbrite($input)
        {
                return stripos(strtolower($input),'eventbrite');
        }
	function getFirstLink($input)
	{
		return substr($input,stripos($input,'http'),stripos($input,'http')-stripos($input,'.com'));
	}
	function formattedInfo($input)
	{
		$input = substr($input, strripos($input,"About this event")); 
		$input = substr($input, 17, stripos($input,"-")); 
		$input = trim($input, "- ");
		return "<p>$input</p>";
	}
?>
