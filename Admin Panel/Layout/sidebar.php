
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="Admin.php" class="app-brand-link">
              <img src="../Logo/courier1.png" style="width:80px" height="80px" margin-top="80px" alt="">
              <span class="app-brand-text demo menu-text fw-bolder ms-2"><?php echo @$_SESSION['DatabaseRole']; ?></span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="Admin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
              </a>
            </li>

            <!-- Home Page -->
            <li class="menu-item active">
              <a href="../index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Home Page</div>
              </a>
            </li>

            <!-- Add Branch -->
            <li class="menu-item">
              <a href="Add Branch.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Branch</div>
              </a>
            </li>

            <!-- Manage Branch -->
            <li class="menu-item">
              <a href="Manage Branch.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Branch</div>
              </a>
            </li>

            <!-- Add Branch Country -->
            <li class="menu-item">
              <a href="Add Branch_country.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Branch Country</div>
              </a>
            </li>

            <!-- Manage Branch Country -->
            <li class="menu-item">
              <a href="Manage Br_country.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Branch Country</div>
              </a>
            </li>

            <!-- Add Package -->
            <li class="menu-item">
              <a href="Add Package.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Package</div>
              </a>
            </li>

            <!-- Manage Packages -->
            <li class="menu-item">
              <a href="Manage Package.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Packages</div>
              </a>
            </li>

             <!-- Add Status -->
             <li class="menu-item">
              <a href="Add Status.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Status</div>
              </a>
            </li>

            <!-- Manage Status -->
            <li class="menu-item">
              <a href="Manage Status.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Status</div>
              </a>
            </li>

            <!-- Add Courier -->
            <li class="menu-item">
              <a href="Add courier.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Courier</div>
              </a>
            </li>

            <!-- Manage Courier -->
            <li class="menu-item">
              <a href="Manage Courier.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Courier</div>
              </a>
            </li>

            <!-- Add Agent -->
            <li class="menu-item">
              <a href="Add Agent.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Agent</div>
              </a>
            </li>

            <!-- Manage Agent -->
            <li class="menu-item">
              <a href="Manage Agent.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Manage Agent</div>
              </a>
            </li>
            
            <!-- View Messages -->
            <li class="menu-item">
              <a href="view Contact.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">View Messages</div>
              </a>
            </li>
        
        </aside>

        <?php if (@$_SESSION['DatabaseRole'] == 'Customer') { ?>
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="Admin.php" class="app-brand-link">
              <img src="../Logo/courier1.png" style="width:80px" height="80px" margin-top="80px" alt="">
              <span class="app-brand-text demo menu-text fw-bolder ms-2"><?php echo @$_SESSION['DatabaseRole']; ?></span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="Admin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
              </a>
            </li>

            <!-- Home Page -->
            <li class="menu-item active">
              <a href="../index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Home Page</div>
              </a>
            </li>

            <!-- Manage Branch -->
            <li class="menu-item">
              <a href="Manage Branch.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Branch</div>
              </a>
            </li>

            
            <!-- Add Courier -->
            <li class="menu-item">
              <a href="Manage Br_country.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Branch Country</div>
              </a>
            </li>

            <!-- Manage Packages -->
            <li class="menu-item">
              <a href="Manage Package.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Packages</div>
              </a>
            </li>

            <!-- Manage Courier -->
            <li class="menu-item">
              <a href="Manage Courier.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Courier</div>
              </a>
            </li>
        
             <!-- View Messages -->
            <li class="menu-item">
              <a href="view Contact.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">View Messages</div>
              </a>
            </li>
        </aside>

        <?php } ?>

        <?php if (@$_SESSION['DatabaseRole'] == 'Agent') { ?>

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="Admin.php" class="app-brand-link">
                <img src="../Logo/courier1.png" style="width:80px" height="80px" margin-top="80px" alt="">
                <span class="app-brand-text demo menu-text fw-bolder ms-2"><?php echo @$_SESSION['DatabaseRole']; ?></span>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="Admin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
              </a>
            </li>

            <!-- Home Page -->
            <li class="menu-item active">
              <a href="../index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Home Page</div>
              </a>
            </li>

            <!-- Manage Branch -->
            <li class="menu-item">
              <a href="Manage Branch.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Branch</div>
              </a>
            </li>

            <!-- Manage Packages -->
            <li class="menu-item">
              <a href="Manage Package.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Packages</div>
              </a>
            </li>

            <!-- Manage Status -->
            <li class="menu-item">
              <a href="Manage Status.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Status</div>
              </a>
            </li>

            <!-- Add Courier -->
            <li class="menu-item">
              <a href="Add courier.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Add Courier</div>
              </a>
            </li>

            <!-- Manage Courier -->
            <li class="menu-item">
              <a href="Manage Courier.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">Manage Courier</div>
              </a>
            </li>

            <!-- View Messages -->
            <li class="menu-item">
              <a href="view Contact.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Layouts">View Messages</div>
              </a>
            </li>
        
        </aside>

        <?php } ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo '<h3>' .@$_SESSION['DatabaseName'].'</h3>';  ?></span>
                            <small class="text-muted"><?php echo '<b>' .@$_SESSION['DatabaseRole']. '</b>';  ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <form action="../Operations/Accounts.php" method="post">
                          <i class="bx bx-power-off me-2"></i>
                        <input type="submit" class="align-middle" name="Logout" value="Log Out">
                        </form>
                        <!-- <span ></span> -->
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->
          
          <!-- Content wrapper -->
          
          <!-- Content wrapper -->

        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    <!-- </div> -->
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
