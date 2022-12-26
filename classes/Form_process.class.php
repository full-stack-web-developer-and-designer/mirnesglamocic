<?php
// define variables and set to empty values
$name = $email = $message = "";
$name_error = $email_error = $message_error = "";
$error=false;
//Load the config file
$dbHost = "localhost:3306";
$dbUser = "mirnesglamocic_sunyoung";
$dbPassword = "m&102003&G";
$dbName = "mirnesglamocic_cert";
$dbCharset = "utf8";
$pdo="";

try{
	$dsn = "mysql:host=" . $dbHost . ";dbName=" . $dbName . ";charset=" . $dbCharset;
	$pdo = new PDO($dsn, $dbUser, $dbPassword);
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//echo "connected!";
}catch(PDOException $e){
	echo "Connection error: " . $e->getMessage();
}
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

//$error = false;
//form is submitted with POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	if(empty($_POST['name'])) {
		//$error = true;
		$name_error = "Name and surname cannot be empty!";
	}else{
		$name = $_POST['name'];
		// check if name only contains letters and whitespace	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $name)){
			$name_error = "Name and surname can only contain letters and a space!";
		}
	}
	if(empty($_POST['email'])){
		$email_error = "E-mail cannot be empty!";
	}else{
		$email = $_POST['email'];
		// check if e-mail address is well-formed
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "The e-mail address is not valid!";
		}
	}
	if(empty($_POST['message'])) {
		$message_error = "The content of the message cannot be empty!";
	}else{
		$message = $_POST['message'];
		// check if name only contains letters and whitespace
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ0-9 ,.!?\'\"]*$/", $message)){
			$message_error = "Message content cannot be special characters!";
		}
	}
	if($name_error == '' && $email_error == '' && $message_error == ''){
		$mail_contact = new PHPMailer(true);
		// Active condition utf-8
		$mail_contact->CharSet = "UTF-8";
		//SMTP Settings
		$mail_contact->isSMTP();
		$mail_contact->Host = 'mail.mirnesglamocic.com';
		$mail_contact->SMTPAuth = true;
		//$mail->SMTPDebug = 2;
		$mail_contact->Username = 'info@mirnesglamocic.com';
		$mail_contact->Password = '&pXj&GFb@5hU';
		$mail_contact->Port = 465; // 587
		$mail_contact->SMTPSecure = 'ssl'; // tls
		//Email Settings
		$mail_contact->isHTML(true);
		$mail_contact->setFrom('info@mirnesglamocic.com');
		// Clear all addresses and attachments for next loop
		$mail_contact->clearAddresses();
		$mail_contact->addAddress('contact@mirnesglamocic.com');
		$mail_contact->Subject = "New message from your website";
		$body = "<p>You have just received a message from your website.<br>The details of your message are below:</p><br><p><strong>From: </strong>" . ucwords($name) . "<br><strong>E-mail: </strong>" .strtolower($email)."<br><strong>Message: </strong>" . $message . "<br><br>Please send your answer to: " . strtoupper($email) . "</p>";
		$mail_contact->Body = $body;
		
      if($mail_contact->send()) {
		$mail_contact = "INSERT INTO mirnesglamocic_cert.contact_me (name, email, message) VALUES (:name, :email, :message)";
		$stmt = $pdo->prepare($mail_contact);
		$stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
		
		if($error==false){
			$text['response'] = "success";
			$text['message'] = "Thank you " . ucwords($name) . "!\n Your message has been successfully sent!\n You will get the answer soon!";
		}
    } 
	else
	{
		$text['response'] = "error";
		$text['message'] = "An error occurred! Try again..." . $mail_contact->ErrorInfo;
    }
	echo json_encode($text); 
} //end if validation
} // end submit
} // end REQUEST METHOD = POST
$pdo=null;