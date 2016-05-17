<?php
  if(!empty($_POST['submit']) && isset($_POST["email"]) && $_POST["email"] != "") {
	
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = 'Message de contact du site christethibaud.ch';
	$message = nl2br($_POST['textContent']);
	$dest = "thibaudchriste1997@gmail.com";

	$headers  = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\n";
    $headers .= 'Reply-to: '.$fname.' '.$lname.' <'.$email.'>' . "\n" ;
    $headers .= 'Return-path: '.$fname.' '.$lname.' <'.$email.'>' . "\n" ;
    $headers .= 'From:'.$fname.' '.$lname.' <'.$email.'>' . "\r\n";

	$message = "<p>".$message."</p><p>Message envoyé par : ".$fname." ".$lname."(".$email.") depuis le site christethibaud.ch</p>";
	if(!mail($dest,utf8_decode($subject),$message,utf8_decode($headers))){
		$info="Une erreur est parvenue ! Veuillez réessayer plus tard ou nous contacter directement par email ! Nous nous en excusons...";
		$class="bg-danger";
	}else{
		$subject = 'Confirmation message de contact du site Enroulex.ch';

		$dest = $email;
		$headers  = 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\n";
		$headers .= 'Reply-to: Enroulex <contact@enroulex.ch>' . "\n" ;
		$headers .= 'Return-path: Christe Thibaud <thibaudchriste1997@gmail.com>' . "\n" ;
		$headers .= 'From: Christe Thibaud <thibaudchriste1997@gmail.comh>'. "\r\n";

		$message = "<p>".$message."</p><p><em>Message envoyé automatiquement<em></p>";
		mail($dest,utf8_decode($subject),$message,utf8_decode($headers));

		$info="Votre message a bien été envoyé ! Nous vous répondrons dans les plus brefs délais.";
		$class="bg-success";
	} 
  }


?>  