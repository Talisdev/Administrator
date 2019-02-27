<?php
require('../config.php');
global $mysqli;
$note = $_POST['note'];
$commentaire = $_POST['commentaire'];
if(empty($commentaire)){
    $commentaire = 'ajoutez un commentaire';  
}
$id = $_POST['id'];
$update_note_req = "UPDATE notes SET `note_note` = '$note', `note_commentaire` = '$commentaire' WHERE id = '".$id."' ";
echo $update_note_req;
if($mysqli->query($update_note_req) === TRUE ){
    echo 'SUPER';
}