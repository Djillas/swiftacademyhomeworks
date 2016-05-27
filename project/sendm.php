







<?php

	//session_start();
 	require_once "validate.php";
 	require_once "src/header.php";
require_once "src/mainmenu.php";
         include ("db.php");


 if (isset($_POST['submit']))
     {
       $toUser = $_POST['toUser'];
  $fromUser = $_POST['fromUser'];
 $message = $_POST['message'];
  $sql = "INSERT INTO 'messages' (toUser, message, fromUser,date_of_creation) VALUES ('$toUser', '$message', '$fromUser',NOW() )";
   $result = $mysqli->query($sql);

   echo "Sent!";
 }
 else
 {
     ?>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
         <fieldset>
             <legend>Send Message</legend>
             <table border="0">
                 <tr><td colspan=2><h3>Send PM:</h3></td></tr>
                 <tr><td></td><td>
                         <input type="hidden" name="fromUser" maxlength="32" value = <?php echo $_SESSION['name']; ?>>
                         </td></tr>
                 <tr><td>To User: </td><td>
                         <input type="text" name="toUser" maxlength="32" value = "">
                         </td></tr>
                 <tr><td>Message: </td><td>
                         <TEXTAREA NAME="message" COLS=50 ROWS=10 WRAP=SOFT></TEXTAREA>
                         </td></tr>
                 <tr><td colspan="2" align="center">
                         <input type="submit" name="submit" value="Send">
                         </td></tr>
                 </table>
             </fieldset>
     </form>


    <?php
     }
 	require_once "src/footer.php";

 ?>

