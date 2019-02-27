<?php
require('../config.php');
global $mysqli;
$matiere_id = intval($_GET['idmatiere']);
if(isset($_GET['asc'])){
    $matiere_req = "SELECT * FROM notes LEFT JOIN users ON users.id = notes.note_user_id WHERE note_matiere_id = '".$matiere_id."' ORDER BY note_note ASC";
}elseif(isset($_GET['desc'])){
    $matiere_req = "SELECT * FROM notes LEFT JOIN users ON users.id = notes.note_user_id WHERE note_matiere_id = '".$matiere_id."' ORDER BY note_note DESC";
}else{
    $matiere_req = "SELECT * FROM notes LEFT JOIN users ON users.id = notes.note_user_id WHERE note_matiere_id = '".$matiere_id."' ";
}
if($resultat = $mysqli->query($matiere_req) ){
    
    ?>
    <table class="table table-hover table-striped">
        <thead>
            <th>Prénom</th>
            <th>Nom</th>
            <th id="note-order">Note</th>
            <th>commentaire</th>
        </thead>
        <tbody>
            <?php
            while( $res = $resultat->fetch_object()){
                $nom = $res->users_name;
                $note = $res->note_note;
                $prenom = $res->users_surname;
                $commentaire = $res->note_commentaire;  
                ?>
            <tr>
                <td ><?php echo $nom ?></td>
                <td><?php echo $prenom ?></td>
                <td class='edit' contentEditable='true' id="note_note-<?php echo $res->id; ?>"><?php echo $note ?></td>
                <td class='edit' contentEditable='true' id="note_commentaire-<?php echo $res->id; ?>"><?php echo $commentaire ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

<?php  
}
?>