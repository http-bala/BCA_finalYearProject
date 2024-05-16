<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo  p-2 ">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-logo demo" style="height:90px; width:40px;">
        <img src="./logo.png" style="height:80px; width:80px;" alt="" srcset="">
</span>
      <span class="app-brand-text demo menu-text fw-bold"><?php  echo $_SESSION['uname'] ?></span>
    </a>

    <a href="" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Add employeee -->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons ti ti-users'></i>  
        <div data-i18n="My Task">My task</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="view-task.php" class="menu-link">
            <div data-i18n="Task Details">Task Details</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- attendition section -->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons ti ti-users'></i>  
        <div data-i18n="Attend">My task</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="attend.php" class="menu-link">
            <div data-i18n="Attend Section"> Details</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
  
  

</aside>