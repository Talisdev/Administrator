<?php
require('../config.php');
global $mysqli;
$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];
if ($field == 'note_note'){
    $value = (int)$value;
    $update_note = "UPDATE notes SET $field = $value WHERE id = ".$editid;

    if($mysqli->query($update_note) === TRUE ){
        echo $update_note;
    }
}else{

    $update_commentaire = "UPDATE notes SET $field ='".$value."' WHERE id = ".$editid;

    if($mysqli->query($update_commentaire) === TRUE ){
        echo $update_commentaire;
    }
}