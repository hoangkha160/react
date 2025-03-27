<?php 
include"PHPMailer/src/PHPMailer.php";
include"PHPMailer/src/Exception.php";
include"PHPMailer/src/OAuth.php";
include"PHPMailer/src/POP3.php";
include"PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer{
	public function dathangmail($tieude,$noidung,$maildathang){
		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		try {
		    $mail->SMTPDebug = 0;                             
		    $mail->isSMTP();                                     
		    $mail->Host = 'smtp.gmail.com';  
		    $mail->SMTPAuth = true;                              
		    $mail->Username = 'sachtruyen247@gmail.com';         
		    $mail->Password = 'lfsrukfeuyhipmad';                          
		    $mail->SMTPSecure = 'tls';                          
		    $mail->Port = 587;                                    
		    $mail->setFrom('sachtruyen247@gmail.com', 'Mailer');
		    $mail->addAddress($maildathang, 'Minh Khôi');
		    $mail->addCC('sachtruyen247@gmail.com');
		    $mail->isHTML(true);                                  
		    $mail->Subject = $tieude;
		    $mail->Body    = $noidung; 
		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}
}
?>