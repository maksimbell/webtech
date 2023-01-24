<?php 

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['email'])) {
    $name="ZATUP GAMES";
    $email=$_POST['email'];
    $subject="Best customer";
    $body="New arrivals! \n\rTry new games with special 70% discount! ZatupGames only!";

    require_once "./PHPMailer.php";
    require_once "./SMTP.php";
    require_once "./Exception.php";

    $mail=new PHPMailer();

    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="lilfidgetx@gmail.com";
    $mail->Password="rtsgvxxyjwjitasz";
    $mail->Port=465;
    $mail->SMTPSecure="ssl";

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject=("$email ($subject)");
    $mail->Body=$body;

    if ($mail->send()) {
        $status="success";
        $response="Email is sent!";

    }

    else {
        $status="failed";
        $response="Something is wrong: <br>". $mail->ErrorInfo;
    }

    header("Location: /engine/games.php");
    //exit(json_encode(array("status"=> $status, "response"=> $response)));
}