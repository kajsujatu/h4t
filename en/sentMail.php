<?php  
 
// FORM FOR PRODUKCJA FOLII

if(isset($_POST['submit-production'])) {
 $mailto = "biuro@h4t.com.pl";
 //getting customer data
 $name = $_POST['name-production']; //getting customer name
 $fromEmail = $_POST['email-production']; //getting customer email
 $phone = $_POST['tel-production']; //getting customer phone number
 $subject = "Formularz kontaktowy EN - Produkcja folii";
 $subject2 = "The message has been successfully sent to HEAD4TECH"; // For customer confirmation
 
 //Email body I will receive
 $message = "Dane kontaktowe klienta: " . "\n"
 . "Imię: " . $name . "\n"
 . "Adres mailowy: " . $fromEmail . "\n"
 . "Nr telefonu: " . $phone . "\n\n"
 . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-production'];
 
 //Message for client confirmation
 $message2 = $name . "," . "\n\n"
 . "Thank you for contact. We will reply as soon as possible!" . "\n\n"
 . "Content of the message sent via the contact form: " . "\n" . $_POST['message-production'] . "\n\n"
 . "Best regards," . "\n" . "HEAD4TECH";
 
 //Email headers
 $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
 $headers2 = "Message from: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your message has been sent.";
  } else {
    $failed = "Sorry, there was an error sending your message. Please try sending again in a few minutes.";
  }
}

// FORM FOR ZGRZEWANIE FOLII

if(isset($_POST['submit-welding'])) {
  $mailto = "biuro@h4t.com.pl";
  //getting customer data
  $name = $_POST['name-welding']; //getting customer name
  $fromEmail = $_POST['email-welding']; //getting customer email
  $phone = $_POST['tel-welding']; //getting customer phone number
  $subject = "Formularz kontaktowy EN - Zgrzewanie folii";
  $subject2 = "The message has been successfully sent to HEAD4TECH"; // For customer confirmation
  
  //Email body I will receive
  $message = "Dane kontaktowe klienta: " . "\n"
  . "Imię: " . $name . "\n"
  . "Adres mailowy: " . $fromEmail . "\n"
  . "Nr telefonu: " . $phone . "\n\n"
  . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-welding'];
  
  //Message for client confirmation
  $message2 = $name . "," . "\n\n"
  . "Thank you for contact. We will reply as soon as possible!" . "\n\n"
  . "Content of the message sent via the contact form: " . "\n" . $_POST['message-welding'] . "\n\n"
  . "Best regards," . "\n" . "HEAD4TECH Sp. z o. o.";
  
  //Email headers
  $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
  $headers2 = "Message from: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your message has been sent.";
   } else {
     $failed = "Sorry, there was an error sending your message. Please try sending again in a few minutes.";
   }
 }

// FORM FOR RECYCLING

if(isset($_POST['submit-recycling'])) {
  $mailto = "biuro@h4t.com.pl";
  //getting customer data
  $name = $_POST['name-recycling']; //getting customer name
  $fromEmail = $_POST['email-recycling']; //getting customer email
  $phone = $_POST['tel-recycling']; //getting customer phone number
  $subject = "Formularz kontaktowy EN - Recycling";
  $subject2 = "The message has been successfully sent to HEAD4TECH"; // For customer confirmation
  
  //Email body I will receive
  $message = "Dane kontaktowe klienta: " . "\n"
  . "Imię: " . $name . "\n"
  . "Adres mailowy: " . $fromEmail . "\n"
  . "Nr telefonu: " . $phone . "\n\n"
  . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-recycling'];
  
  //Message for client confirmation
  $message2 = $name . "," . "\n\n"
  . "Thank you for contact. We will reply as soon as possible!" . "\n\n"
  . "Content of the message sent via the contact form: " . "\n" . $_POST['message-recycling'] . "\n\n"
  . "Best regards," . "\n" . "HEAD4TECH";
  
  //Email headers
  $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
  $headers2 = "Message from: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your message has been sent.";
   } else {
     $failed = "Sorry, there was an error sending your message. Please try sending again in a few minutes.";
   }
 }

 // FORM FOR ZAKUP ODPADU

 if(isset($_POST['submit-buy-waste'])) {
  $mailto = "biuro@h4t.com.pl";
  //getting customer data
  $name = $_POST['name-buy-waste']; //getting customer name
  $fromEmail = $_POST['email-buy-waste']; //getting customer email
  $phone = $_POST['tel-buy-waste']; //getting customer phone number
  $subject = "Formularz kontaktowy EN - Zakup odpadu";
  $subject2 = "The message has been successfully sent to HEAD4TECH"; // For customer confirmation
  
  //Email body I will receive
  $message = "Dane kontaktowe klienta: " . "\n"
  . "Imię: " . $name . "\n"
  . "Adres mailowy: " . $fromEmail . "\n"
  . "Nr telefonu: " . $phone . "\n\n"
  . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-buy-waste'];
  
  //Message for client confirmation
  $message2 = $name . "," . "\n\n"
  . "Thank you for contact. We will reply as soon as possible!" . "\n\n"
  . "Content of the message sent via the contact form: " . "\n" . $_POST['message-buy-waste'] . "\n\n"
  . "Best regards," . "\n" . "HEAD4TECH";
  
  //Email headers
  $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
  $headers2 = "Message from: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your message has been sent.";
   } else {
     $failed = "Sorry, there was an error sending your message. Please try sending again in a few minutes.";
   }
 }
 
?>