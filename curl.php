
////Hello



$ch = curl_init();




curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');




//////////

curl_setopt($ch, CURLOPT_URL, "https://api.mailchimp.com/api.php?format=json&action=subscribe"
);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));   // post data
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


/////////

curl_setopt($ch, CURLOPT_HTTPHEADER, $test);








//////////////


$json = curl_exec($ch);


//////////////


$ch = curl_init();
//match 2

//////////
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

curl_setopt($ch, CURLOPT_URL, "http://api.mailchimp.com/api.php?format=json&action=subscribe");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));   // post data
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


/////////

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type: application/json", "X-Riscosity-Tkn: " . $_SESSION["X-Riscosity-Tkn"], 'X-Riscosity-User: '. $_SESSION['Username']));

$json = curl_exec($ch);



////
