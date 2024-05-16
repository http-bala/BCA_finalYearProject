<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


  <div class="app-brand demo  p-2 ">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-logo demo" style="height:90px; width:40px;">
        <img src="./logo.png" style="height:80px; width:80px;" alt="" srcset="">
      </span>
      <span class="app-brand-text demo menu-text fw-bold">Admin side</span>
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
      <i class="fa-solid fa-users mx-2 "></i>
        <div data-i18n="Manage Employee">Manage Employee</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-employee.php" class="menu-link">
            <div data-i18n="Add Employee">Add Employee</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="view-employee.php" class="menu-link">
            <div data-i18n="View Employee">View Employee</div>
          </a>
        </li>
      </ul>
    </li>


    <!-- Comapany Details-->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
        <i class="fa-solid fa-industry mx-2 "></i>
        <div data-i18n="Company Details">Company Details</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-company.php" class="menu-link">
            <div data-i18n="Add company Details">Add company Details</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="view-company.php" class="menu-link">
            <div data-i18n="View company details">View company Locaton</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- category section -->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
      <i class="fa-solid fa-layer-group mx-2"></i>
        <div data-i18n="category Details">category Details</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="category.php" class="menu-link">
            <div data-i18n="Category List">Category list</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- Task Details-->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
      <i class="fa-solid fa-list-check mx-2"></i>
        <div data-i18n="Task Details">Task Details</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="add-task.php" class="menu-link">
            <div data-i18n="Add Task Details">Add Task Details</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="view-task.php" class="menu-link">
            <div data-i18n="View Task Details">View Task Locaton</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- compelate Details-->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
      <i class="fa-solid fa-info mx-2 "></i>
        <div data-i18n="Compeleted Details">Compelete Details</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="view-complete-task.php" class="menu-link">
            <div data-i18n="Compelete Task Details">Compelete Task Locaton</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- ATTENDS  Details-->
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
      <i class="fa-solid fa-clipboard-user mx-2 "></i>
        <div data-i18n="Attenddance Details">Compelete Details</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="view-Attendance-record-list.php" class="menu-link">
            <div data-i18n="Punching details">Compelete Task Locaton</div>
          </a>
        </li>
      </ul>
    </li>

        <!-- dashboard user   Details-->
        <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
      <i class="fa-solid fa-user-tie mx-2"></i>
        <div data-i18n="Manage Admin ">Admin user Manager</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="view-admin-deatils.php" class="menu-link">
            <div data-i18n="Admin details">Admin details</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>

  



</aside>