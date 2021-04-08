<?php 

// define variables and set to empty values
$name_error = $email_error  = "";
$name = $email  = $message  = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Ime je obavezno";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Samo slova i razmak su dopušteni!"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email je obavezan";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Uključite @ znak!"; 
    }
  }
  
  

  

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' and $email_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'severinknezevic@gmail.com';
      $subject = 'Poruka za Vas';
      if (mail($to, $subject, $message)){
          $success = "Poruka je poslana! Očekujte odgovor brzo";
          $name = $email  = $message  = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}