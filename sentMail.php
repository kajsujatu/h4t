<?php  
 
if(isset($_POST['submit-production'])) {
 $mailto = "michalmatwijow@gmail.com";
 //getting customer data
 $name = $_POST['name-production']; //getting customer name
 $fromEmail = $_POST['email-production']; //getting customer email
 $phone = $_POST['tel-production']; //getting customer phone number
 $subject = "Formularz kontaktowy - Produkcja folii";
 $subject2 = "Wiadomość została pomyślnie wysłana do HEAD4TECH Sp. z o. o."; // For customer confirmation
 
 //Email body I will receive
 $message = "Dane kontaktowe klienta: " . "\n"
 . "Imię: " . $name . "\n"
 . "Adres mailowy: " . $fromEmail . "\n"
 . "Nr telefonu: " . $phone . "\n\n"
 . "Treść przesłanej wiadomości: " . "\n" . $_POST['message-production'];
 
 //Message for client confirmation
 $message2 = $name . "," . "\n\n"
 . "Dziękujemy za skontaktowanie się z nami. Odpowiemy jak najszybciej!" . "\n\n"
 . "Treść wysłanej wiadomości przez formularz kontaktowy: " . "\n" . $_POST['message-production'] . "\n\n"
 . "Pozdrawiamy serdecznie," . "\n" . "Zespół HEAD4TECH Sp. z o. o.";
 
 //Email headers
 $headers = "Wiadomość od: " . $fromEmail; // Client email, I will receive
 $headers2 = "Wiadomość od: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Twoja wiadomość została wysłana";
  } else {
    $failed = "Przykro nam, wystąpił błąd podczas wysyłania wiadomości. Spróbuj wysłać ponownie za parę minut.";
  }
}
 
?>