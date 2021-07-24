
                
                <?php 
                session_start();
                error_reporting(0);
                include('includes/config.php');
                function debug_to_console($data) {
                    $output = $data;
                    if (is_array($output))
                        $output = implode(',', $output);
                
                    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
                }
                $last_id = $_SESSION['lastid'];
              
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;
                    require 'vendor/autoload.php';
                    $sql1 = "SELECT  email FROM users WHERE id='$last_id'";
				    $result = mysqli_query($con, $sql1);
                    $to_id='hasaniwijeweera@gmail.com';
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $to_id=$row['email'];
                        }

                    }
                    
                                 
                        $mail = new PHPMailer(true);

                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;

                        $mail->Username = 'salonaura.ragama@gmail.com';
                        $mail->Password = 'salonaura12';
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587; //or5465

                        $mail->setFrom('salonaura.ragama@gmail.com','Salon AURA');
                        $mail->addAddress($to_id);
                        $mail->Subject = 'Successfully Created an Account';
                        $mail->Body = 'Dear Customer,

                        Thank You very much for selecting Salon AURA !!

                        Salon AURA now avalible for online booking 
                        log in and book any treatment you want.';

                                           echo "<script>window.location.href = 'login.php'</script>";
                        if(!$mail->send()){
                            $error = "Mailer Error : ".$mail->ErrorInfo;
                            echo "<div class=display>'.$error.'</div>";
                        }
                         ?>
