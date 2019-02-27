<?php
    $page = 'profile';
    require_once('inc/config.php');
    $get_id = $_GET['id'];
    $user_id = $_SESSION['activity']['id'];
    $user_classe_id = $_SESSION['activity']['classe'];
    require_once('inc/functions.php');
    $message='';
    $surname = '';
    $username = '';
    $name ='';
    $cp = '';
    $adress = '';
    $aboutme = '';
    $email = '';
    $city ='';
    
    if( isset($_POST['update']) ){
        $profile_surname = $_POST['profile_surname'];
        $profile_username = $_POST['profile_username'];
        $profile_name = $_POST['profile_name'];
        $profile_cp = $_POST['profile_cp'];
        $profile_adress = $_POST['profile_adress'];
        $profile_aboutme = addslashes($_POST['profile_about']);
        $profile_email = $_POST['profile_email'];
        $profile_city = $_POST['profile_city'];

        $update_request = "UPDATE users
        SET users_surname = '".$profile_surname."',
            users_name = '".$profile_name."',
            users_adress = '".$profile_adress."',
            users_username = '".$profile_username."',
            users_email = '".$profile_email."',
            users_aboutme = '".$profile_aboutme."',
            users_cp = '".$profile_cp."',
            users_city = '".$profile_city."'
        WHERE id = '".$user_id."'";
        if( $mysqli->query($update_request) === TRUE){
            $message = "Mise à jour effectuée.";
        }
        
    }
    // Récup données
    $profile_request = "SELECT * FROM users WHERE id = '".$user_id."' LIMIT 1";
    if($profile_details = $mysqli->query($profile_request) ){
        while( $res = $profile_details->fetch_object()){
            $username = $res->users_username;
            $name = $res->users_name;
            $surname = $res->users_surname;
            $adress = $res->users_adress;
            $cp = $res->users_cp;
            $city = $res->users_city;
            $email = $res->users_email;
            $type = $res->users_type;
            $username = $res->users_username;
            $aboutme = $res->users_aboutme;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('inc/head.php'); ?>
    <!--begin::Page Vendors Styles -->
    <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <?php include('inc/nav.php'); ?>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                        <?php 
                            if( $_SESSION['activity']['type'] == 1 ){
                                include('inc/sidebar.php');
                            }else if( $_SESSION['activity']['type'] == 2 ){
                                include('inc/sidebar.php');
                            }else if( $_SESSION['activity']['type'] == 3 ){
                                include('inc/sidebar-admin.php');
                            }
                        ?>
            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                <?php 
                if( $get_id == $_SESSION['activity']['id']){
                    include('inc/boards/modules-edit/profile-details.php');
                }else{
                    include('inc/boards/modules/profile-public.php');
                }
                ?>
            </div>
            </div>
        </div>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/widgets/quick-sidebar.php'); ?>
    <?php include('inc/widgets/scroll-top.php'); ?>
    <?php include('inc/scripts.php'); ?>  
    <!--begin::Page Vendors -->
    <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
    <!--begin::Page Scripts -->
    <script src="assets/app/js/dashboard.js" type="text/javascript"></script>
</body>
</html>