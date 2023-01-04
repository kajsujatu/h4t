<?php  
 
// FORM FOR PRODUKCJA FOLII

if(isset($_POST['submit-production'])) {
 $mailto = "biuro@h4t.com.pl";
 //getting customer data
 $name = $_POST['name-production']; //getting customer name
 $fromEmail = $_POST['email-production']; //getting customer email
 $phone = $_POST['tel-production']; //getting customer phone number
 $subject = "Formularz kontaktowy DE - Produkcja folii";
 $subject2 = "Die Nachricht wurde erfolgreich an HEAD4TECH gesendet"; // For customer confirmation
 
 //Email body I will receive
 $message = "Dane kontaktowe klienta: " . "\n"
 . "Imię: " . $name . "\n"
 . "Adres mailowy: " . $fromEmail . "\n"
 . "Nr telefonu: " . $phone . "\n\n"
 . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-production'];
 
 //Message for client confirmation
 $message2 = $name . "," . "\n\n"
 . "Danke, dass Sie uns kontaktiert haben. Wir werden so schnell wie möglich antworten!" . "\n\n"
 . "Inhalt der über das Kontaktformular gesendeten Nachricht: " . "\n" . $_POST['message-production'] . "\n\n"
 . "Mit freundlichen Grüßen," . "\n" . "HEAD4TECH Sp. z o. o.";
 
 //Email headers
 $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
 $headers2 = "Nachricht von: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Ihre Nachricht wurde gesendet.";
  } else {
    $failed = "Entschuldigung, beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es in ein paar Minuten erneut.";
  }
}

// FORM FOR ZGRZEWANIE FOLII

if(isset($_POST['submit-welding'])) {
  $mailto = "biuro@h4t.com.pl";
  //getting customer data
  $name = $_POST['name-welding']; //getting customer name
  $fromEmail = $_POST['email-welding']; //getting customer email
  $phone = $_POST['tel-welding']; //getting customer phone number
  $subject = "Formularz kontaktowy DE - Zgrzewanie folii";
  $subject2 = "Die Nachricht wurde erfolgreich an HEAD4TECH gesendet"; // For customer confirmation
  
  //Email body I will receive
  $message = "Dane kontaktowe klienta: " . "\n"
  . "Imię: " . $name . "\n"
  . "Adres mailowy: " . $fromEmail . "\n"
  . "Nr telefonu: " . $phone . "\n\n"
  . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-welding'];
  
  //Message for client confirmation
  $message2 = $name . "," . "\n\n"
  . "Danke, dass Sie uns kontaktiert haben. Wir werden so schnell wie möglich antworten!" . "\n\n"
  . "Inhalt der über das Kontaktformular gesendeten Nachricht: " . "\n" . $_POST['message-welding'] . "\n\n"
  . "Mit freundlichen Grüßen," . "\n" . "HEAD4TECH Sp. z o. o.";
  
  //Email headers
  $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
  $headers2 = "Nachricht von: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Ihre Nachricht wurde gesendet.";
   } else {
     $failed = "Entschuldigung, beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es in ein paar Minuten erneut.";
   }
 }

// FORM FOR RECYCLING

if(isset($_POST['submit-recycling'])) {
  $mailto = "biuro@h4t.com.pl";
  //getting customer data
  $name = $_POST['name-recycling']; //getting customer name
  $fromEmail = $_POST['email-recycling']; //getting customer email
  $phone = $_POST['tel-recycling']; //getting customer phone number
  $subject = "Formularz kontaktowy DE - Recycling";
  $subject2 = "Die Nachricht wurde erfolgreich an HEAD4TECH gesendet"; // For customer confirmation
  
  //Email body I will receive
  $message = "Dane kontaktowe klienta: " . "\n"
  . "Imię: " . $name . "\n"
  . "Adres mailowy: " . $fromEmail . "\n"
  . "Nr telefonu: " . $phone . "\n\n"
  . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-recycling'];
  
  //Message for client confirmation
  $message2 = $name . "," . "\n\n"
  . "Danke, dass Sie uns kontaktiert haben. Wir werden so schnell wie möglich antworten!" . "\n\n"
  . "Inhalt der über das Kontaktformular gesendeten Nachricht: " . "\n" . $_POST['message-recycling'] . "\n\n"
  . "Mit freundlichen Grüßen," . "\n" . "HEAD4TECH Sp. z o. o.";
  
  //Email headers
  $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
  $headers2 = "Nachricht von: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Ihre Nachricht wurde gesendet.";
   } else {
     $failed = "Entschuldigung, beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es in ein paar Minuten erneut.";
   }
 }

 // FORM FOR ZAKUP ODPADU

 if(isset($_POST['submit-buy-waste'])) {
  $mailto = "biuro@h4t.com.pl";
  //getting customer data
  $name = $_POST['name-buy-waste']; //getting customer name
  $fromEmail = $_POST['email-buy-waste']; //getting customer email
  $phone = $_POST['tel-buy-waste']; //getting customer phone number
  $subject = "Formularz kontaktowy DE - Zakup odpadu";
  $subject2 = "Die Nachricht wurde erfolgreich an HEAD4TECH gesendet"; // For customer confirmation
  
  //Email body I will receive
  $message = "Dane kontaktowe klienta: " . "\n"
  . "Imię: " . $name . "\n"
  . "Adres mailowy: " . $fromEmail . "\n"
  . "Nr telefonu: " . $phone . "\n\n"
  . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-buy-waste'];
  
  //Message for client confirmation
  $message2 = $name . "," . "\n\n"
  . "Danke, dass Sie uns kontaktiert haben. Wir werden so schnell wie möglich antworten!" . "\n\n"
  . "Inhalt der über das Kontaktformular gesendeten Nachricht: " . "\n" . $_POST['message-buy-waste'] . "\n\n"
  . "Mit freundlichen Grüßen," . "\n" . "HEAD4TECH Sp. z o. o.";
  
  //Email headers
  $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
  $headers2 = "Nachricht von: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Ihre Nachricht wurde gesendet.";
   } else {
     $failed = "Entschuldigung, beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es in ein paar Minuten erneut.";
   }
 }
 
?>