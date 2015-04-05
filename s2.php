<?php
$accessToken = "a95594dc-ae55-4f96-a6d7-87e2d2ff7870";
$json = implode('', file($url));
$theEndpoints = json_decode($json,true);
$lockUrl = "https://graph.api.smartthings.com".$v['url']."/locks";
                $access_key = $_REQUEST['access_token'];

                $ch = curl_init($lockUrl);
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Bearer ' . $access_key ) );
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
                curl_setopt($ch, CURLOPT_POST,           0 );

                $resp =  curl_exec($ch);
                curl_close($ch);

                $respData = json_decode($resp,true);

                if(count($respData) > 0) print "<h2>Locks</h2>";

        //let's show the locks
                foreach($respData as $i => $lock)
                {
                        $label = $lock['label'] != "" ? $lock['label'] : "Unlabeled Lock";

                        print "<h3>$label</h3>";

                        $lockUrl = "https://graph.api.smartthings.com".$v['url']."/locks/".$lock['id']."/lock?access_token=".$_REQUEST['access_token'];
                        print "<a target='cmd' href='$lockUrl'>Lock</a>";

                        $unlockUrl = "https://graph.api.smartthings.com".$v['url']."/locks/".$lock['id']."/unlock?access_token=".$_REQUEST['access_token'];
                        print "<a  target='cmd' href='$unlockUrl' value='Off'>Unlock</a><BR>";
                }
?>
