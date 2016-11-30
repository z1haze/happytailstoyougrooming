<?php

require '../vendor/autoload.php';
use Mailgun\Mailgun;

$mg = new Mailgun('key-698b4481659a1d723ad145de2b7fe4e1');
$domain = 'happytailstoyougrooming.com';

$request_method = $_SERVER["REQUEST_METHOD"];

if ( $request_method == 'POST') {
	if ( empty( $_POST['name']) || empty( $_POST['email']) || empty( $_POST['message']) || empty( $_POST['area']) || empty( $_POST['existing'])) {
		echo 'Please fill out all sections';
		http_response_code(500);
		exit;
	}

	if ( isset($_POST['g-recaptcha-response'])) {
		$captcha=$_POST['g-recaptcha-response'];
	}
	if ( ! $captcha) {
		echo 'Please check the the captcha form.';
		http_response_code(500);
		exit;
	}

	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LemLhATAAAAAM7EbxstnaWREHdu5OiR8yZ97Tdh&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	$decoded_response = json_decode($response);
	if ( ! $decoded_response->success) {
		echo 'Failed spam check. Please try again.';
		http_response_code(500);
		exit;
	}


	$name = htmlspecialchars(trim($_POST['name']));
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	$message = htmlspecialchars(trim($_POST['message']));
	$area = htmlspecialchars(trim($_POST['area']));
	$existing = htmlspecialchars(trim($_POST['existing']));

	$to = 'happytailstoyougrooming@gmail.com';

	$subject = 'NEW Inquiry From Your Website';
	$email_content  = "Name: $name\n";
	$email_content .= "Email: $email\n";
	$email_content .= "Area: $area\n";
	$email_content .= "Client Status: $existing\n";
	$email_content .= "Message:\n$message";

	$result = $mg->sendMessage($domain, array(
			'from'=> $email,
			'to'=> $to,
			'subject' => $subject,
			'text' => $email_content
	    )
	);

	if($result->http_response_code == 200) {
		http_response_code(200);
        echo "Thank You! Your message has been sent.";
	} else {
		http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
	}
} else {
	http_response_code(403);
	echo "Must be a POST request";
}