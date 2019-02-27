<?php
    $page = 'index';
    require_once('inc/config.php');
    $user_id = $_SESSION['activity']['id'];
    $user_classe_id = $_SESSION['activity']['classe'];
    require_once('inc/functions.php');
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
                    <div class="row">
                        <div class="col-md-9">
                            <?php include('inc/boards/modules/news-single.php'); ?>
                        </div>
                        <div class="col-md-3">
       

                            <!--begin::Portlet-->
                            <div class="m-portlet">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Catégories
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Section-->
                                    <div class="m-section m-section--last">
                                        <div class="m-section__content">
                                            <!--begin::Preview-->
                                                    <div class="m-list-search">
                                                        <div class="m-list-search__results">
                                                            
                                                            <?php
                                                                displayNewsCategories();
                                                            ?>
                                                           
                                                          
                                                        </div>
                                            </div>
                                            <!--end::Preview-->

                                          
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                            <!--end::Portlet-->
         
                        </div>
                    </div>
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