
                <?php 
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;
                    require 'vendor/autoload.php';


                        $mail = new PHPMailer(true);

                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;

                        $mail->Username ='salonaura.ragama@gmail.com';
                        $mail->Password = 'salonaura12';
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587; //or5465

                        $mail->setFrom('salonaura.ragama@gmail.com','Salon AURA');
                        $mail->addAddress('hasaniwijeweera@gmail.com');
                        $mail->Subject = 'Appointment Booked';
                        $mail->Body = 'Dear Customer,

                        Thank You very much for selecting Salon AURA !!

                        Salon AURA now avalible for online booking 
                        log in and book any treatment you want.';

                        if(!$mail->send()){
                            $error = "Mailer Error : ".$mail->ErrorInfo;
                            echo "<div class=display>'.$error.'</div>";
                        }else{
                            echo "<script>window.location.href = 'user/order-history.php'</script>";
                        }
                                 ?>
