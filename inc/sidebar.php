
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

<!-- BEGIN: Aside Menu -->
<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
  <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
    <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="index.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
            <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
    <li class="m-menu__section ">
      <h4 class="m-menu__section-text">Ma Classe</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
  
    <?php displayMenuStudentClasse($_SESSION['activity']['classe']); ?>

    <li class="m-menu__section ">
      <h4 class="m-menu__section-text">Mes Matières</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    <!-- Boucle matières -->
   
    <?php displayMenuStudentMatieres(); ?>
 
    <li class="m-menu__section ">
      <h4 class="m-menu__section-text">Mes Notes</h4>
      <i class="m-menu__section-icon flaticon-more-v2"></i>
    </li>
    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="notes.php" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Mes notes</span><i
            class="m-menu__ver-arrow la la-angle-right"></i></a>
    </li>

  </ul>
</div>

<!-- END: Aside Menu -->
</div>