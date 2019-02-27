<div class="card">
    <div class="card-content">
        <div class="card-body">
            <h4 class="card-title">Vos dernières notes</h4>
            <p>Choose your matière: </p>
            <?php
                // Préparer une requête SQL qui récupére les matières

                // Lancer la requête
                // Ouvrir un echo de la balise "<select>"
                //Lancer la boucle while
                //Echo des balises <option> (ne pas oublier les attributs value)
                //Fermeture de la balise
             $matiere_req = "SELECT * FROM matieres_profs LEFT JOIN matieres ON matieres.id = matieres_profs.matieres_profs_matieres_id WHERE matieres_profs.matieres_profs_users_id = '".$prof_id."' ";
            if($resultat = $mysqli->query($matiere_req)){
                echo '<select id="matieres-select" onchange="displayNotes(this.value, false)">';
                while( $res = $resultat->fetch_object()){
                    echo '<option value="'.$res->id.'">'.$res->matieres_name.'</option>';
                }
                echo '</select>';
            }
            ?>
        </div>
        <ul  id="notes-display"  class="list-group list-group-flush">
            <!-- <li class="list-group-item"> -->
        </ul> 

      <!--   $matiere_req = "SELECT * FROM matieres_profs LEFT JOIN matieres ON matieres.id = matieres_profs.matieres_profs_matieres_id WHERE matieres_profs.matieres_profs_users_id = '".$prof_id."' ";
       
        if($resultat = $mysqli->query($matiere_req)){
             while( $res = $resultat->fetch_object()){
            echo '<h4>'.$res->matieres_name.'</h4>';
            $matiere_id = $res->matieres_profs_matieres_id;
                $matiere_req = "SELECT * FROM notes LEFT JOIN users ON users.id = notes.note_user_id WHERE note_matiere_id = '".$matiere_id."' ";
                if($resultat = $mysqli->query($matiere_req) ){
    
    ?> -->
    
<?php


?>
    </div>
</div>
</div>