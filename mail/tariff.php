
<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['type']))
   {
	echo "Введите данные!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];

$tarif = "";
$message = "";

    if($type == "one"){
		$message = "Разовый";
		
	}
	if($type == "base"){
		$message = "Базовый";
		
	}
	if($type == "start-up"){
		$message = "Стартап";
		
	}
	if($type == "prof"){
		$message = "Профи";
		}
		
		
// Create the email and send the message
$to = 'zakaz@anti-office.kz'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Новый заказ";
$email_body = "Вы получили новый заказ на сайте.\n\n"."Вот детали сообщения:\n\nИмя: $name\nEmail: $email_address\nТелефон: $phone\nТип тарифа:\n$message";
$headers = "From: no-reply@anti-office.kz\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

