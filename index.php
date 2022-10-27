<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
//This is the first menu screen
if ( $text == "" ) {
<<<<<<< HEAD
$response = "CON Hi welcome, I am your KDoc,  \n";
=======
$response = "CON Hi welcome, I'm K-Doc \n";
>>>>>>> c2856bbfdb097db20b4d177bebcc8df5d6a9056a
$response .= "1. Enter 1 to continue";
//k-doctor.herokuapp.com/prqwehttps://k-doctor.herokuapp.com/pruio}QWEPRUIO// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
<<<<<<< HEAD
  $response = "CON This is K_Doc i am here to answer your Health questions for free Choose Prefered Language \n";
  $response .= "1. English \n";
$response .= "3. Pigin \n";
  
  }
  //Menu for a user who selects '1' from the second menu above
  // Will be brought to this third menu screen
  else if ($text == "1*1") {
  $response = "CON How do you identify. choose one? \n";
  $response .= "1. Male \n";
  $response .= "2. Female \n"; 
  $response .= "3. Non-Binary \n";
  $response .= "4. Enter 0 to cancel\n";

  }
  else if ($text == "1*1*1") {
  $response = "CON Got it. How old are you? \n";
  $response .= "1. 10years - 20years \n";
  $response .= "2. 21years - 40years \n";
  $response .= "3. 50+ \n";
  $response .= "4. Enter 0 to cancel";
  }
  else if ($text == "1*1*1*1") {
  $response = "";
  }
  else if ($text == "1*1*1*0") {
  $response = "Your session has been canceled";
  }
  
  //echo response
  header('Content-type: text/plain');
?>
=======
$response = "CON Pick a table for reservation below \n";
$response .= "1. Table for 2 \n";
$response .= "2. Table for 4 \n";
$response .= "3. Table for 6 \n";
$response .= "4. Table for 8 \n";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "CON You are about to book a table for 2 \n";
$response .= "Please Enter 1 to confirm \n";
}
else if ($text == "1*1*1") {
$response = "CON Table for 2 cost -N- 50,000.00 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*1*1*1") {
$response = "END Your Table reservation for 2 has been booked";
}
else if ($text == "1*1*1*0") {
$response = "END Your Table reservation for 2 has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
$response = "CON You are about to book a table for 4 \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
$response = "CON Table for 4 cost -N- 150,000.00 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*2*1*1") {
$response = "END Your Table reservation for 4 has been booked";
}
else if ($text == "1*2*1*0") {
$response = "END Your Table reservation for 4 has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
$response = "CON You are about to book a table for 6 \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "CON Table for 6 cost -N- 250,000.00 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*3*1*1") {
$response = "END Your Table reservation for 6 has been booked";
}
else if ($text == "1*3*1*0") {
$response = "END Your Table reservation for 6 has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response = "CON You are about to book a table for 8 \n";
$response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
$response = "CON Table for 8 cost -N- 250,000.00 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*4*1*1") {
$response = "END Your Table reservation for 8 has been booked";
}
else if ($text == "1*4*1*0") {
$response = "END Your Table reservation for 8 has been canceled";
}
//echo response
header('Content-type: text/plain');
echo $response
?>
>>>>>>> c2856bbfdb097db20b4d177bebcc8df5d6a9056a
