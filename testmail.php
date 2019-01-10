<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 07/08/2018
 * Time: 14:49
 */

    /*$msg = "";*/
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require "PHPMailer/PHPMailer.php";
	require "PHPMailer/Exception.php";
	require "PHPMailer/SMTP.php";
	require 'PHPMailer.autoload.php';

	if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mail = new PHPMailer(true);
        $mail->Host = "smtp.gmail.com";
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = 'delclooquentin@gmail.com';
        $mail->Password = 'QuentinLiam-btz64200';
        $mail->SMTPSecure = "ssl"; //TLS
        $mail->Port = 465; //587
        $mail->addAddress('delclooquentin@gmail.com', 'Quentin');
        $mail->setFrom($email, $name);
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = $message;

        // Headers
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: delclooquentin@gmail.com' . "\r\n";
        $to = 'delclooquentin@gmail.com';
        /*$subject  = 'Contact via le site internet de ' . $name;*/

        // Texte
        $body = '
		<html>
			<head>
				<title>Contact via le site internet</title>
			</head>

			<body>
				<p>Bonjour, un visiteur a pris contact via le formulaire du site.</p>
				<p>Voici les détails : </p>';

        $body .= "<p>Nom : " .$name. '</p>'. "\r\n";
        $body .= "<p>E-mail : " .$email. '</p>'. "\r\n";
        $body .= "<p>Sujet : " .$subject. '</p>'. "\r\n";
        $body .= "<p>Message : ". '</p><p>' .$message. '</p>';

        $body .=
            '</body>
		</html>';

        // Dossier d'upload des fichiers de traçage d'emails
        $upload_dir = $_SERVER['DOCUMENT_ROOT']. '/mails/' .date('Y'). '/' .date('m'). '/';

        checkDirorCreate($_SERVER['DOCUMENT_ROOT']. '/mails/');

        checkDirorCreate($_SERVER['DOCUMENT_ROOT']. '/mails/' .date('Y'));

        checkDirorCreate($_SERVER['DOCUMENT_ROOT']. '/mails/' .date('Y') .'/'. date('m'));

        $file_name  = '' .date('Y-m-d'). '_';
        $file_name .= date('H'). 'h' .date('i'). 'm' .date('s'). 's_' .wd_remove_accents($name);

        $file_content  = "Nom : " .$name. "\n";
        $file_content .= "E-mail : " .$email. "\n";
        $file_content .= "Sujet : " .$subject. "\n";
        $file_content .= "Message : " . "\n".$message;

        file_put_contents($upload_dir .$file_name. '.txt', $file_content);
        /*echo "<pre>";
        var_dump($mail);
        echo "</pre>";*/
        // If there are no errors, send the email
        /*($mail($to, $subject, $body, $headers))*/
        if ($mail->send()) {
            $resultok='<div class="alert alert-success">Message envoyé. Merci.</div>';
        } else {
            $resultko='<div class="alert alert-danger">Une erreur est survenue. Si elle persiste: 06 31 18 71 92 </div>';
        }
    }

function checkDirorCreate($path)
{
    // Vérifie si le répertoire existe bien
    if (file_exists($path) == false)
    {
        mkdir($path);
    }
}

function wd_remove_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);

    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

    return $str;
}
?>