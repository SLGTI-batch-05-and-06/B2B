
<?php
$page = substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1); 
?>




<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="../IMAGE/LOGOH.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">TakTook.com</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!---CHOICE COLOUR--->
        <a class="nav-link text-white   <?= $page =="./START.php"?'active bg-gradient-primary':''; ?>" href="./START.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">First page</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $page =="CATEGORY.php"?'active bg-gradient-primary':''; ?>" href="./CATEGORY.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">All Cetegory</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white   <?= $page =="ADD-CATEGORY.php"?'active bg-gradient-primary':''; ?>" href="./ADD-CATEGORY.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">+</i>
          </div>
          <span class="nav-link-text ms-1">Add Cetegory</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white   <?= $page =="PORDUCT.php"?'active bg-gradient-primary':''; ?>" href="./PORDUCT.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">All Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white   <?= $page =="ADD-PORDUCT.php"?'active bg-gradient-primary':''; ?>" href="./ADD-PORDUCT.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">+</i>
          </div>
          <span class="nav-link-text ms-1">Add Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white   <?= $page =="USR_VIEW.php"?'active bg-gradient-primary':''; ?>" href="./USR_VIEW.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Colllection</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </div>
</aside>