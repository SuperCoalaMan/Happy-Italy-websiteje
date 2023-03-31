<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "89955@glr.nl";  
 
 $name = $_POST['name']; 
 $date = $_POST['datum'];
 $fromEmail = $_POST['email']; 
 $personen = $_POST['personen'];
 $subject = "Reservering Happy Italy " . $_POST['name'];
 $subject2 = "Bevestiging reservering Happy Italy";
 

 $message = "Klanten naam: " . $name . "\n"
 . "Aantal personen: " . $personen . "\n\n"
 . "Datum: " . $date . "\n\n"
 . "Opmerking: " . "\n" . $_POST['message'];
 
 
 $message2 = "Beste, " . $name . "\n"
 . "Bedankt voor het reserveren." . "\n\n"
 . "U heeft deze opmerking geplaatst: " . "\n" . $_POST['message'] . "\n\n"
 . "U bent welkom op." . $date . "\n\n"
 . "Met " . $personen . " personen" . "\n\n"
 . "Met vriendelijke groet," . "\n" . "- Happy Italy";
 

 $headers = "From: " . $fromEmail; 
 $headers2 = "From: " . $mailto; 
 
 
 
  $result1 = mail($mailto, $subject, $message, $headers); 
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); 
 
 
 
  if ($result1 && $result2) {
    $success = "Uw reservering is geplaatst!";
    $check = "css/5610944.png";
    $script = "<script> openPopup('check'); </script>";
  } else {
    $failed = "Sorry! Uw reservering is niet geplaatst, Probeer later opnieuw.";
    $x = "css/png-red-round-close-x-icon-31631915146jpppmdzihs.png";
    $script = "<script> openPopup('x'); </script>";
  }
 
}
 
?>