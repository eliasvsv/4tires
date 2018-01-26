<?php 
 // set post fields
$post = [
    'queryString' => '175/70R13'
];

$ch = curl_init('http://www.nexxon.ro/anvelope/rpc.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
echo $response;
 ?>