<?php
    require_once('../../config.php');
    require_once('../../functions.php');
    global $mysqli;
    $userID = $_SESSION['activity']['id'];
    $ipadress = $_SERVER["REMOTE_ADDR"];
// On vérifie que l'utilisateur est inscrit dans la base de données
$online_req = "SELECT * FROM chat_online WHERE online_user = '$userID'";
if($resultat = $mysql->query($online_req)){
    $count = $resultat->num_rows;
}
$data = $query->fetch();

if(user_verified()){
    $time = time();
	/* si l'utilisateur n'est pas inscrit dans la BDD, on l'ajoute, sinon
	on modifie la date de sa derniere actualisation */
	if($count == 0) {
		$insert_req = "INSERT INTO chat_online (
            online_ip,
            online_user,
            online_status,
            online_time
        ) VALUES(
            '$ipadress',
            '$userID',
            '2',
            'time()'
        )";
        if($mysqli->query($insert_req) === TRUE ){
            $json['online'] = true; 
        }
	} else {
		$update_req = "UPDATE chat_online SET online_time = '.$time.' WHERE online_user = '.$userID.'";
		
        if($mysqli->query($update_req) === TRUE ){
            $json['update'] = true; 
        }
	}
}
$time_out = time()-5;
$delete_req = "DELETE FROM chat_online WHERE online_time < '$time_out'";
if($mysqli->query($delete_req) === TRUE ){
    $json['delete'] = true; 
}



// Récupère les membres en ligne sur le chat
// et retourne une liste
$online_members_req = "SELECT * FROM chat_online LEFT JOIN users ON users.id = chat_online.online_user ORDER BY users.users_username";
if($resultat = $mysqli->query($online_members_req)){
    $count = $resultat->num_rows;
}
/* Si au moins un membre est connecté, on l'affiche.
Sinon, on affiche un message indiquant que personne n'est connecté */
if($count != 0) {
	// On affiche qu'il n'y a aucune erreur
	$json['error'] = '0';
	
	$i = 0;
	while($data = $resultat->fetch_object()) {
		if($data->online_status == '0') {
			$status = 'inactive';
		} elseif($data->online_status == '1') {
			$status = 'busy';
		} elseif($data->online_status == '2') {
			$status = 'active';
		}
		
		// On enregistre dans la colonne [status] du tableau
		// le statut du membre : busy, active ou inactive (occupé, en ligne, absent)
		$infos["status"] = $status;
		// Et on enregistre dans la colonne [login] le pseudo
		$infos["login"] = $data->username;
		
		// Enfin on enregistre le tableau des infos de CE MEMBRE
		// dans la [i ème] colonne du tableau des comptes 
		$accounts[$i] = $infos;
		$i++;
	}
	// On enregistre le tableau des comptes dans la colonne [list] de JSON
	$json['list'] = $accounts;
} else {
	// Il y a une erreur, aucun membre dans la liste
	$json['error'] = '1';
}

$query->closeCursor();

// Encodage de la variable tableau json et affichage
echo json_encode($json);
?>