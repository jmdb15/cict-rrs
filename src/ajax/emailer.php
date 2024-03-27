<?php

//Load Composer's autoloader
require '../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function generateToken($length = 20) {
    return bin2hex(random_bytes($length));
}
function sendEmail(array $recipients, $subject, $body,array $fileDirs=[], $alt = ''){
    $mail = new PHPMailer(true);
    if($alt == ''){
        $alt = $body;
    }
    try {
        //Server settings
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                   
        $mail->SMTPAuth   = true;                                 
        $mail->Username   = 'lee04373@gmail.com';            
        $mail->Password   = 'giwigwrnjhlmlepo';                       
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        
        $mail->Port       = 465;                                   
    
        $mail->setFrom('lee04373@gmail.com', 'CICT-Files');
        
        if(count($fileDirs) > 0){
            foreach ($fileDirs as $fileDir) {
                $mail->addAttachment($fileDir);
            }
        }
                
        // foreach ($recipients as $recipient) {
            if(count($recipients)> 1){
                foreach($recipients as $recipient){
                    $mail->addAddress($recipient);
                }
            }else{
                $mail->addAddress($recipients[0]);
            }
        // }
        $mail->isHTML(true);                                 
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $alt;
        if($mail->send()) {
            echo 'Message has been sent';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>