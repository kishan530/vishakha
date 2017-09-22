<?php
include("admin/config.php");
$username = $email = $subject = $message = '';
$username=$_POST["username"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
//echo "hello orld";
/*$Name="hello";
$Email="hello@gmail.com";
$PhoneNumber="123456";
$Message="hello mot";*/
$messageBody="";
//echo("HELOO VENU HOW R U");
//$conn=mysqli_connect('localhost','root','','wedelicious');
if($con->connect_error){
die("connection error :" . $con->connect_error);
}
$sql=mysqli_query($con,"insert into contact_us(username,email,subject,message,active)values('$username','$email','$subject','$message','1')");
//if($sql);
//echo (mysqli_error($conn));

//require_once('sendemail.php'); 

$to      = "visakaindustries@gmail.com";
                                     $subject = "testing";

                                    $headers = "From: " .$email. "\r\n";
                                    $headers .= "Reply-To: ".$email. "\r\n";
                                    
                                    $headers .= "MIME-Version: 1.0\r\n";
                                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                    
                                    $messageBody .= '<body>
                                    <div class="div2" style=" width: 609px;  padding: 50px; background-color:#CCC;">
                                                                        <div class="div1" style=" background-color:white; border: 1px solid white;  margin-left: 30px; width: 550px; font-size:14px;">
                                                                                
                                                                                
                                          <h1>Contact Person  Message</h1>
                                          <p>
                                         <b> username </b> :'. $username .' </p>
                                          <p>
                                         <p>
                                         <b> email </b> :'. $email .' </p>
                                          <p>
										  <p>
                                         <b> subject </b> :'. $subject .' </p>
                                          <p>
                                        <b>message </b> : '. $message .' </p>';
                                            
                                            $messageBody .=' 
                                            </div>
                                    </div>
                                    </body>';
                              
                              mail($to, $subject, $messageBody, $headers);

  	header("location:contact.php");	

?>