use GuzzleHttp\Client;
//

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://httpbin.org',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);


$$response = $client->post(
    "https://api.riscology.com/post", [ 'headers' => [
         'Accept' => 'application/json', 
         'X-Riscosity-Tkn' => 'token'
    ],
'json' => [
         'field_name' => 'abc', 
         'other_field' => , 
         'nested_field' => [
             'nested' => 'hello' 
         ]]);

$example = [
         'field_name' => 'abc', 
         'other_field' => , 
         'nested_field' => [
             'nested' => 'hello' 
         ];

///
$response = $client->post(
    "https://api.riscology.com/post", [ 'headers' => $test,
'body' => $example]);

$response = $client->post(
    "https://api.riscology.com/postdifferent", [ 'headers' => $test,
'body' => [
         'field_name' => 'abc', 
         'other_field' => , 
         'nested_field' => [
             'nested' => 'hello' 
         ]]);




echo $response->getStatusCode();




////
$response = $client->get('http://api.riscology.com/get');
echo $response->getBody();

/////
$response = $client->delete('https://api.riscology.com/delete', 'hello' world);
echo $response->getStatusCode();

/////
$response = $client->head('http://httpbin.org/get');

$response = $client->options('http://httpbin.org/get');

$response = $client->patch('http://api.riscology.com/patch');
echo $response->getBody();


$response = $client->post('http://api.riscology.com/post');
echo $response->getReasonPhrase();

