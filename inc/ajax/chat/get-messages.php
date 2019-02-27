<?php
 require_once('../../config.php');
 require_once('../../functions.php');
 global $mysqli;
 $json['error'] = '0';
 $json['annonce'] = 'a';
 $json['messages'] = 'b';

    $annonce_req = "SELECT * FROM chat_annonce LIMIT 0,1";
    if( $resultat = $mysqli->query($annonce_req) ) {
        while($data = $resultat->fetch_object()){
            $json['annonce'] = $data->annonce_text;
        }
    }
    $list_req = "SELECT message_id, message_user, message_time, message_text, users.id, users_username FROM chat_messages LEFT JOIN users ON users.id = chat_messages.message_user ORDER BY message_time ASC";
    $json['messages'] = $list_req;
    if( $resultat2 = $mysqli->query($list_req) ) {
    $count = $resultat2->num_rows;
    $json['messages'] = $count;
    if($count != 0) {         
        $json['messages'] = '<div id="messages_content">';
        $json['messages'] .= '<table><tr><td style="height:500px;" valign="bottom">';
        $json['messages'] .= '<table style="width:100%">';
    
        $i = 1;
        $e = 0;
        $prev = 0;

        $text = "";
      while ($data2 = $resultat2->fetch_object()) {
            if($i != 1) {
                $idNew = $data['message_user'];		
                if($idNew != $id) {
                    if($colId == 1) {
                        $color = '#077692';
                        $colId = 0;
                    } else {
                        $color = '#666';
                        $colId = 1;
                    }
                    $id = $idNew;
                } else
                    $color = $color;
            } else {
                $color = '#666';
                $id = $data['message_user'];
                $colId = 1;
            }
    		$text .= '<tr><td style="width:15%" valign="top">';
            if($prev != $data2->id) {
                // contenu du message	
                $text .= '<a href="#post" onclick="insertLogin(\''.addslashes($data2->users_username).'\')" style="color:black">';
                $text .= date('[H:i]', $data2->message_time);
                $text .= '&nbsp;<span style="color:'.$color.'">'.$data2->users_username.'</span>';
                $text .= '</a>';	
            }
            $text .= '</td>';			
            $text .= '<td style="width:85%;padding-left:10px;background-color:#c7d7db; padding:10px;" valign="top">';
    
            // On supprime les balises HTML
            $message = htmlspecialchars($data2->message_text); 
    
            // On transforme les liens en URLs cliquables
                
            // Si le nom apparaît suivi de >, on le colore en orange
            $text .= $message.'<br />';
            $text .= '</td></tr>';
            // On ajoute le message en remplaçant les liens par des URLs cliquables
           
            $i++;
            $prev = $data2->id;
        }
            
    
        $json['messages'] .= $text;
        $json['messages'] .= '</table>';
        $json['messages'] .= '</td></tr></table>';
        $json['messages'] .= '</div>';	
     } else {
        $json['messages'] .= $count;
        $json['messages'] .= 'Aucun message n\'a été envoyé pour le moment.';
    } 
}

    echo json_encode($json);
?>