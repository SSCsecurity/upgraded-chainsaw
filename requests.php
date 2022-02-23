//////



echo 'hello there';

////// 



curl_init();

$headers = array('Accept' => 'application/json');
/////

//test

$options = array('auth' => array('user', 'pass'));
$request = WpOrg\Requests\Requests::get($test, 
$headers, $options);

var_dump($request->status_code);
// int(200)

var_dump($request->headers['content-type']);
// string(31) "application/json; charset=utf-8"

var_dump($request->body);
// string(26891) "[...]"

$request = WpOrg\Requests\Requests::post('http://api.github.com',$headers, 
$options);

//
$request = WpOrg\Requests\Requests::post('http://api.github.com',   array('X-Requests' => 'Is Awesome!'), 
$options);

$response = Requests::patch('https://api.github.com/events', $test, array(
'X-Requests' => 'Is Awesome!'));

$response = Requests::delete('https://api.github.com/events', 
$headers, 
array('X-Requests' => 'Is Awesome!'));




/////
