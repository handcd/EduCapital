<?php 
if(isset($_POST['inputEmail']) &&
	isset($_POST['inputName']) &&
	isset($_POST['inputPhone']) &&
	isset($_POST['inputMensaje']) &&
	){
    $to = "contacto@educapital.com.mx"; // email de EduCapital
    $from = $_POST['inputEmail']; // el email de quién envía el formulario
    $nombre = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $phone = $_POST['inputPhone'];
    $msg = $_POST['inputMensaje'];
    $subject = "Formulario Contacto EduCapital";
    $message = $nombre . " escribió:" . "\n\n" . $msg . "\n\n" . "Email: " . $email . "\nTeléfono: " . $phone . "\n\n" ;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.

    header('Location: http://educapital.com.mx/index.html');
    }
?>