<?php

// Menu management

// ADMIN MENU




// PROF MENU
    function displayMenuProfClasses(){
        global $mysqli;
        global $user_id;
        $req = "SELECT * FROM classes_profs 
        LEFT JOIN classes
        ON classes_profs.classes_profs_classes_id = classes.id 
        WHERE classes_profs.classes_profs_profs_id = '".$user_id."' ";
        if($res = $mysqli->query($req) ){
            while( $r = $res->fetch_object()){
                $title = $r->classe_name;
            ?>  
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text"><?php echo $title; ?></span><i
            class="m-menu__ver-arrow la la-angle-right"></i></a>
            </li>
            <?php
            }
        }
    }
    function displayMenuProfNotes(){
        global $mysqli;
        global $user_id;
        $req = "SELECT * FROM classes_profs 
        LEFT JOIN classes
        ON classes_profs.classes_profs_classes_id = classes.id 
        WHERE classes_profs.classes_profs_profs_id = '".$user_id."' ";
        if($res = $mysqli->query($req) ){
            while( $r = $res->fetch_object()){
                $title = $r->classe_name;
            ?>  
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text"><?php echo $title; ?></span><i
            class="m-menu__ver-arrow la la-angle-right"></i></a>
            </li>
            <?php
            }
        }
    }
    function displayMenuProfMatieres(){
        global $mysqli;
        global $user_id;
        $req = "SELECT * FROM matieres_profs 
        LEFT JOIN matieres
        ON matieres_profs.matieres_profs_matieres_id = matieres.id 
        WHERE matieres_profs.matieres_profs_users_id = '".$user_id."' ";
        if($res = $mysqli->query($req) ){
            while( $r = $res->fetch_object()){
                $title = $r->matieres_name;
            ?>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text"><?php echo $title; ?></span><i
            class="m-menu__ver-arrow la la-angle-right"></i></a>
            </li>
            <?php
            }
        }
    }

// STUDENT MENU
    function displayMenuStudentClasse(){
        global $mysqli;
        global $user_id;
        $req = "SELECT * FROM classes_users 
        LEFT JOIN classes
        ON classes_users.classes_users_classes_id = classes.id 
        WHERE classes_users.classes_users_users_id = '".$user_id."' ";
        if($res = $mysqli->query($req) ){
            while( $r = $res->fetch_object()){
                $title = $r->classe_name;
                $id = $r->id;
            ?>  
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="classe.php?classe=<?php echo $id; ?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text"><?php echo $title; ?></span><i
            class="m-menu__ver-arrow la la-angle-right"></i></a>
            </li>
            <?php
            }
        }
    }
    function displayMenuStudentMatieres(){
        global $mysqli;
        global $user_classe_id;
        $req = "SELECT * FROM matieres_classes 
        LEFT JOIN matieres
        ON matieres_classes.matieres_classes_matieres_id = matieres.id 
        WHERE matieres_classes.matieres_classes_classes_id = '".$user_classe_id."' ";
        if($res = $mysqli->query($req) ){
            while( $r = $res->fetch_object()){
                $title = $r->matieres_name;
                $id = $r->id;
            ?>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="ressources.php?id=<?php echo $id; ?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text"><?php echo $title; ?></span><i
            class="m-menu__ver-arrow la la-angle-right"></i></a>
            </li>
            <?php
            }
        }
    }

    function adminDisplayClasse(){

    };
        
    function adminDisplayProfs(){

    };
        
    function adminDisplayMatieres(){

    };
        
    function adminDisplayUsers(){

    };
        
    function adminDisplayNotes(){

    };
        


// CLASSE
    function studentDisplayClasseProfs($i){
        global $mysqli;
        $students_request = "SELECT * FROM users LEFT JOIN classes_profs ON users.id = classes_profs.classes_profs_profs_id WHERE classes_profs.classes_profs_classes_id = '".$i."' ";
        if($resultat_students = $mysqli->query($students_request) ){
            ?>
          
          <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Vos Professeurs
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget4_tab1_content">  
				        <div class="m-widget4">
            <div class="row">
                <?php
                while( $res = $resultat_students->fetch_object()){
                    $username = $res->users_username;
                    $surname = $res->users_surname;
                    $lastname = $res->users_name;
                    $id = $res->id;
                   
                    ?>
                    <div class="m-widget4__item col-md-3">
                        <div class="m-widget4__img m-widget4__img--pic">					 
                            <img src="assets/media/img/users/100_2.jpg" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                            <?php echo $surname.' '.$lastname; ?>
                            </span><br>		
                            <?php
                             $matieres_req = "SELECT * FROM matieres WHERE id = '".$id."' ";
                             if($resultat_mats = $mysqli->query($matieres_req) ){
                                 while( $res2 = $resultat_mats->fetch_object()){
                            ?>
                            <span class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
                                <a href="ressources.php?id=<?php echo $id; ?>"><?php echo $res2->matieres_name; ?></a>
                            </span>	
                            <?php 
                                }
                            }
                            ?>
                        </div>
                        <div class="m-widget4__ext">
                            <a href="profile.php?id=<?php echo $id; ?>" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Page perso</a>
                        </div>
                    </div>
                <?php
                }
                ?> 
                </div>
                </div>
            </div>
             </div>
            <?php
        }
    };
    function studentDisplayClasseStudents($i){
        global $mysqli;
        $students_request = "SELECT * FROM users LEFT JOIN classes ON classes.id = users.users_classe WHERE users_classe = '".$i."' ";
        if($resultat_students = $mysqli->query($students_request) ){
            ?>
          
          <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Votre classe
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget4_tab1_content">  
				        <div class="m-widget4">
            <div class="row">
                <?php
                while( $res = $resultat_students->fetch_object()){
                    $username = $res->users_username;
                    $surname = $res->users_surname;
                    $lastname = $res->users_name;
                    $id = $res->id;
                    ?>
                    <div class="m-widget4__item col-md-3">
                        <div class="m-widget4__img m-widget4__img--pic">					 
                            <img src="assets/media/img/users/100_2.jpg" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                            <?php echo $surname.' '.$lastname; ?>
                            </span><br> 
                            <span class="m-widget4__sub">
                            <?php echo $username; ?>
                            </span>							 		 
                        </div>
                        <div class="m-widget4__ext">
                            <a href="profile.php?id=<?php echo $id; ?>" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Page perso</a>
                        </div>
                    </div>
                <?php
                }
                ?> 
                </div>
                </div>
            </div>
             </div>
            <?php
        }
    };









// NEWS
// Affichage des news
    function studentDisplayNews(){
        global $mysqli;
        $news_request = "SELECT * FROM news_feed ORDER BY id ASC LIMIT 6";
        if($resultat_news = $mysqli->query($news_request) ){
            while( $res = $resultat_news->fetch_object()){
                $news_id = $res->id;
                $news_title = $res->news_title;
                $news_url = $res->news_link_external;
            ?>
              <li class="list-group-item">
                    <?php 
                        if($news_url !== ''){ 
                            echo '<a href="'.$news_url.'"target="_blank" title="External Link">'.$news_title.' &#9721;</a>'; 
                        }else{
                            echo '<a href="article.php?id='.$news_id.'"target="_blank">'.$news_title.'</a>';
                        }
                    ?>
                </li>
            <?php
            }
        }
    }
    function displayNewsCategories(){
        global $mysqli;
        $news_request = "SELECT * FROM news_cat";
        if($resultat_news = $mysqli->query($news_request) ){
            while( $res = $resultat_news->fetch_object()){
                $cat_title = $res->news_cat_name;
                $cat_id = $res->id;
                $count_req = "SELECT * FROM news_feed WHERE news_category_id = '".$cat_id."' ";
                if($resultat_count = $mysqli->query($count_req) ){
                    $num_rows = mysqli_num_rows($resultat_count);
                }
                ?>
                <a href="#" class="m-list-search__result-item">
                    <span class="m-list-search__result-item-icon"><i class="flaticon-lifebuoy m--font-warning"></i></span>
                    <span class="m-list-search__result-item-text"> <?php  echo $cat_title; ?> (<?php echo $num_rows; ?>)</span>
                </a>      
                </li>
            <?php
            }
        }
    }
    function displayNewsContent($i){
        global $mysqli;
        $news_request = "SELECT * FROM news_feed LEFT JOIN news_cat ON news_cat.id = news_feed.news_category_id WHERE news_feed.id = '".$i."' ";
        if($resultat_news = $mysqli->query($news_request) ){
            while( $res = $resultat_news->fetch_object()){
                $news_title = $res->news_title;
                $news_url = $res->news_link_external;
                $news_cat = $res->news_cat_name;
                $news_content = $res->news_content;
            ?>
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon">
                                <i class="flaticon-statistics"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                <?php echo  $news_title; ?>
                            </h3>
                            <h2 class="m-portlet__head-label m-portlet__head-label--accent">
                                <span><?php echo  $news_cat; ?></span>
                            </h2>
                        </div>			
                    </div>
                    <!--                     
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-cloud-upload"></i></a>	
                            </li>						
                            <li class="m-portlet__nav-item">
                                <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-cog"></i></a>	
                            </li>
                            <li class="m-portlet__nav-item">
                                <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-share-alt-square"></i></a>	
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="m-portlet__body">
                    <?php echo $news_content; ?>    
                </div>
            <?php
            }
        }
    }



















// RESSOURCES
    function getCategoryTitle($i){
        global $mysqli;
        $req = "SELECT * FROM matieres WHERE id = '".$i."'";
        if($res = $mysqli->query($req) ){
            $res = $res->fetch_object();
            echo $res->matieres_name;
        }   
    }
    function studentListRessources($i, $j){
        global $mysqli;
        $list_courses = "SELECT * FROM courses LEFT JOIN classes ON classes.id = courses.courses_classes WHERE  courses.courses_classes = '".$i."' AND courses.courses_matieres_id = '".$j."' ";
        if($resultat_courses = $mysqli->query($list_courses) ){
            while($res = $resultat_courses->fetch_object()){
            ?>
            <div class="m-portlet m-portlet--bordered m-portlet--rounded  m-portlet--last">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
                                <?php echo $res->course_title ?>
								</h3>
							</div>			
						</div>
					</div>
					<div class="m-portlet__body">
                    <?php echo $res->course_content; ?>
                </div>
                </div>
            <?php
            }
        }
    }
    function studentListRessourcesCategories($i){
        global $mysqli;
        $list_courses = "SELECT * FROM matieres_classes LEFT JOIN matieres ON matieres_classes.matieres_classes_matieres_id = matieres.id WHERE  matieres_classes.matieres_classes_classes_id = '".$i."'";
        if($resultat_courses = $mysqli->query($list_courses) ){
            while($res = $resultat_courses->fetch_object()){
                $list_ressources_categories = "SELECT COUNT(courses_matieres_id) AS total FROM courses WHERE courses_classes = '".$i."' GROUP BY courses_matieres_id ";
                if($resultat_ressources_categories = $mysqli->query($list_ressources_categories) ){
                    $res2 = $resultat_ressources_categories->fetch_object();
                ?>
                <a href="ressources.php?id=<?php echo $res->matieres_classes_matieres_id; ?>" class="m-list-search__result-item">
                    <span class="m-list-search__result-item-icon"><i class="flaticon-interface-3 m--font-warning"></i></span>
                    <span class="m-list-search__result-item-text"><?php echo $res->matieres_name.' ( '.$res2->total.' )'; ?></span>
                </a>
                <?php 
                }
            }
        }
    }


// Notes
    function studentDisplayNotes($id){
        global $mysqli;
        $student_notes_request = "SELECT * FROM notes WHERE note_user_id = '".$id."' LIMIT 7";
        if($resultat_notes = $mysqli->query($student_notes_request) ){
            while( $res = $resultat_notes->fetch_object()){
                $matiere = $res->note_matiere_id;
                $matiere_request = "SELECT * FROM matieres WHERE id = '".$matiere."'";
                if($mat_notes = $mysqli->query($matiere_request) ){
                    while( $res2 = $mat_notes->fetch_object()){
                        $matiere_name = $res2->matieres_name;
                    }
                }
                $prof = $res->note_prof_id;
                $prof_request = "SELECT * FROM users WHERE id = '".$prof."'";
                if($prof_notes = $mysqli->query($prof_request) ){
                    while( $res3 = $prof_notes->fetch_object()){
                        $prof_name = $res3->users_surname.' '.$res3->users_name;
                        $prof_email = $res3->users_email;
                    }
                }
            ?>
                <tr>
                    <td> <?php echo $matiere_name; ?></td>
                    <td><?php echo $res->note_note; ?> / 5</td>
                    <td><a href="profile.php?id=<?php echo $prof; ?>"><?php echo $prof_name; ?></a></td>
                    <td><?php echo $res->note_commentaire; ?></td>
                </tr>
            <?php
            }
        }
    }
    function studentMoyenne($id){
        global $mysqli;
        $student_notes_request = "SELECT * FROM notes WHERE note_user_id = '".$id."'";
        if($resultat_notes = $mysqli->query($student_notes_request) ){
            $moyenne = 0;
            $nbr_notes = $resultat_notes->num_rows;
            while( $res = $resultat_notes->fetch_object()){
                $moyenne += $res->note_note;
            }
            if($nbr_notes >= 1){
                $moyenne = $moyenne / $nbr_notes;
                $moyenne_arrondie = round($moyenne);
                $moyenne = "Votre moyenne: <strong>".$moyenne."/5</strong>.<br>";
                switch ($moyenne_arrondie):
                    case 0:
                        $moyenne .= '<span class="small">Vraiment merdique...</span>';
                        break;
                    case 1:
                        $moyenne .= '<span class="small">Vraiment pas terrible...</span>';
                        break;
                    case 2:
                        $moyenne .= '<span class="small">Presque sauvé...</span>';
                        break;
                    case 3:
                        $moyenne .= '<span class="small">De justesse...</span>';
                        break;
                    case 4:
                        $moyenne .= '<span class="small">Bravo petit champion...</span>';
                        break;
                    case 5:
                        $moyenne .= '<span class="small">Welcome Einstein...</span>';
                        break;
                    default:
                        $moyenne .= '';
                endswitch;
            }else{
                $moyenne = "Vous n'avez pas encore de notes.";
            }
            return $moyenne;
        }
    }



    
    function profReadNote(){
        global $mysqli;
        
    }
    function profCreateNote(){
        global $mysqli;
        
    }
    function profEditNote(){
        global $mysqli;
        
    }
    function profDeleteNote(){
        global $mysqli;        
        
    }
?>