<?php
include_once("class.contextio.php");

function flushTokens()
{
	$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
	$listAccountTokensResponse = $contextIO->listConnectTokens(); 
	var_dump($listAccountTokensResponse); 
}
function connect()
{
	$contextIO = new ContextIO('qd8cq03s','SogN0NW6RPJPkStv');
	$addTokenResponse = $contextIO->addConnectToken(array('callback_url' => 'http://tnevets.net/LAHacks/'));
	//get the redirect url from the response, and direct the user to it
	$redirectUrl = $addTokenResponse->getDataProperty('browser_redirect_url');
	return $redirectUrl; 
}

?>