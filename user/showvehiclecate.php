
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    EasyPark Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .nav-link:hover {
      background-image: linear-gradient(310deg, rgba(121, 40, 202, 0.6) 0%, rgba(255, 0, 128, 0.6) 100%);
      border-radius: 18px;
    }

    .submenu {
      display: none;
      list-style: none;
      padding-left: 80px;
    }

    .submenu .nav-link {
      padding: 5px 10px;
      background-color: #d1d1d6;
      border-radius: 10px;
    }

    .submenu .nav-link {
      padding: 5px;
    }
    #submenu-item{
        height: 35px;
        padding-left: 5px;
        margin-top:5px;
    }
  </style>
</head>
<body>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="index.php">
        <h4>EasyPark</h4>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-white text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Services</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0);" onclick="toggleSubmenu('add-space-submenu')">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-plus text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Add</span>
          </a>
          <ul class="submenu" id="add-space-submenu">
            <li><a class="nav-link" href="addspace2.php" id="submenu-item">Add Space</a></li>
            <li><a class="nav-link" href="subpage2.php" id="submenu-item">My Space</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0);" onclick="toggleSubmenu('search-space-submenu')">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-search text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Search</span>
          </a>
          <ul class="submenu" id="search-space-submenu">
            <li><a class="nav-link" href="searchspace.php" id="submenu-item">Search Space</a></li>
            <li><a class="nav-link" href="subpage4.php" id="submenu-item">Booked Space</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="setting.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-cogs text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">About Us</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3">
      <a class="btn bg-gradient-primary mt-3 w-100" href="logout.php">
        Logout
      </a>
    </div>
  </aside>

  <script>
    function toggleSubmenu(id) {
      var submenu = document.getElementById(id);
      if (submenu.style.display === "none" || submenu.style.display === "") {
        submenu.style.display = "block";
      } else {
        submenu.style.display = "none";
      }
    }
  </script>
</body>
</html>
