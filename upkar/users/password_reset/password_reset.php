<?php
$email=$_POST['email'];
$contact=$_POST['contact'];
$token=bin2hex(random_bytes(16));
$token_hash=hash("sha256",$token);
$expiry=date("Y-m-d H:i:s",time() + 60 * 30);
$mysqli = require __DIR__ . "/db.php";

$sql="UPDATE user_table set reset_token_hash=?, reset_token_expires_at=? where u_email=? and user_mobile=?";
$stmt=$mysqli->prepare($sql);
$stmt->bind_param("ssss",$token_hash,$expiry,$email,$contact);
$stmt->execute();

if($mysqli->affected_rows){
    $mail= require __DIR__ . "/mailer.php";
    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Reset Password";
    $mail->Body = <<<END
    Click on this link to reset your password <a href="http://localhost/upkar/users/password_reset/reset_password.php?token=$token">Click!</a>
    END;

    try{
        $mail->send();

    }catch(Exception $e){
        echo "Message could not be sent. Mailer Error :{$mail->ErrorInfo}";
    }
    
}
echo "<script>alert('Please check your inbox.')</script>";
echo "<script>window.open('forgot_password.php','_self')</script>";
?>