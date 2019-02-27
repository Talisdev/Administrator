<div class="card">
    <div class="card-content">
        <div class="card-body">
            <h4 class="card-title">Vos dernières notes</h4> 
        </div>
        <?php
            $matiere_req = "SELECT * FROM matieres_profs LEFT JOIN matieres ON matieres.id = matieres_profs.matieres_profs_matieres_id WHERE matieres_profs.matieres_profs_users_id = '".$prof_id."' ";
            if($resultat = $mysqli->query($matiere_req)){
               while( $res = $resultat->fetch_object()){
                 echo '<h2>'.$res->matieres_name.'</h2>'; 
                    $notes_req = "SELECT * FROM users LEFT JOIN notes ON notes.note_user_id = users.id WHERE note_matiere_id = ' ".$res->matieres_profs_matieres_id." '   ";
                    if($notes_res = $mysqli->query($notes_req)){
                        ?>
                        <table class="table">
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Note</td>
                                <td>Commentaire</td>
                            </tr>
                        </thead>
                        <?php
                        while($res2 = $notes_res->fetch_object()){
                            ?>
                            <tr>
                                <td><?php echo $res2->users_name; ?></td>
                                <td><?php echo $res2->users_surname; ?></td>
                                <td><?php echo $res2->note_note; ?></td>
                                <td><?php echo $res2->note_commentaire; ?></td>
                                <td><i data-toggle="modal" data-target="#m_modal_<?php echo $res2->id; ?>" class="fa fa-edit"></i></td>
                            </tr>
                            <div class="modal fade" id="m_modal_<?php echo $res2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $res2->users_name.' '.$res2->users_surname; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <div contentEditable="true" class="note"><?php echo $res2->note_note; ?></div>
                                    <div contentEditable="true" class="commentaire"><?php echo $res2->note_commentaire; ?></div>
                                   </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" onclick="updateNote(<?php echo $res2->id; ?>);" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    }
                }
            }
        ?>
    </div>
</div>
</div>