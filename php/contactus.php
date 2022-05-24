<?php
if (isset($_POST['send'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];


$to ='danuka1999lakshan@gmail.com';
$mail_subject = "Massage From Vehicle Insurance Company";
$email_body = "Message From contact Us page of Vehicle Insurance Managemant System";
$email_body .="From : {$name}";
$email_body .="Email : {$email}";
$email_body .="Phone Number : {$phone}";
$email_body .="Message : ".nl2br(strip_tags($massage));

$header = "From: {$email}";

if( mail($to,$mail_subject,$email_body,$header)){
    header("Location: contactus.php?massage=Send Email");
}else{
    header("Location: index.html?error=Not Send Email");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact Us</title>
</head>
<body>
<div class="container">
	<div class="row">
			<h1>Contact Us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="name" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="email" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="phone" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea  name="massage" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
			
              <button class="btn-lrg submit-btn" name ="send"  type="submit">Send</button>
			</div>
	</div>
    </form>

</div>

</body>
</html>