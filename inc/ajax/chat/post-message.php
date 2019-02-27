<?php
 require_once('../../config.php');
 require_once('../../functions.php');
 global $mysqli;
if(user_verified()) {
	if(isset($_POST['message']) AND !empty($_POST['message'])) {
            $realtime = time();
            $userid = $_SESSION['activity']['id'];
            $themessage = $_POST['message'];
            $insert = "INSERT INTO chat_messages ( message_id, message_user, message_time,  message_text ) VALUES( '', '$userid', '$realtime', '$themessage' )";
                echo $insert;
            if( $mysqli->query($insert) === TRUE){
                echo true;
            }
		} else
			echo 'Votre message est vide.';	
} else
	echo 'Vous devez être connecté.';	
?>