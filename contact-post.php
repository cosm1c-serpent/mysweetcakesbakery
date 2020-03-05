<?php 
require'dbconfig/config.php';
session_start();
// define variables and set to empty values
$name_error = $email_error = $phone_error = "";
$name = $email = $phone = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
				  if (empty($_POST["name"])) {
					$name_error = "Name is required";
				                             } else {
					$name = test_input($_POST["name"]);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					  $name_error = "Only letters and white space allowed"; 
					                                         }
				                                    }

				  if (empty($_POST["email"])) {
					$email_error = "Email is required";
				                              } else {
					$email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  $email_error = "Invalid email format"; 
					                                                }
				                                    }
				  
				  if (empty($_POST["phone"])) {
				    $phone_error = "Contact No. is required";
				                              } else {
				    $phone = test_input($_POST["phone"]);
				    // check if e-mail address is well-formed
				    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
				      $phone_error = "Invalid phone number"; 
				                                     }
				                                                                                                   }

				  if (empty($_POST["url"])) {
					$url_error = "";
				                            } else {
					$url = test_input($_POST["url"]);
					// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
					  $url_error = "Invalid URL"; 
					                                                                                                           }
				                                    }

				  if (empty($_POST["message"])) {
					$message = "";
				                                } else {
					$message = test_input($_POST["message"]);
				                                       }
				  
				  if ($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '' ){
					  $message_body = '';
					  unset($_POST['submit']);
					  foreach ($_POST as $key => $value){
						  $message_body .=  "$key: $value\n";
					                                    }
					  $ordersid= mysqli_insert_id($con);

					 // INSERT INTO `contactus`(`id`, `name`, `email`, `phone`, `message`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])


					  mysqli_query($con, 'INSERT INTO contactus(name, email, phone, message) VALUES ("'.$name.'", "'.$email.'", "'.$phone.'", "'.$message.'")');
					  $success="Message sent, thank you for contacting us!";
					  
					  $name = $email = $phone = $message = "";

					 /*$to = 'shaileshbhgt559@gmail.com';
						$subject = 'Contact Form Submit';
						if (mail($to, $subject, $message)){
						$success = "Message sent, thank you for contacting us!";
					   $name = $email = $phone = $message = '';
					  }*/
				                                                                                            
				  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>