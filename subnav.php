<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
        <div class="item"><a href="#"><i class="fas fa-desktop"></i>Register</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-table"></i>Reports<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="#" class="sub-item">Attendance</a>
            <a href="#" class="sub-item">Status</a>
            <a href="#" class="sub-item">DropOut</a>
          </div>
        </div>
        <div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="#" class="sub-item">Sub Item 01</a>
            <a href="#" class="sub-item">Sub Item 02</a>
          </div>
        </div>
        <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
    </script>

  </body>
</html>

<!---->
<nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/yha_logo.png">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="re_form.php">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Register</span>
        </a></li>
        <li><a href="01.php">
          <i class="fas fa-file"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="status1.php">
          <i class="fas fa-check"></i>
          <span class="nav-item">Status</span>
        </a></li>
        <li><a href="dropout.php">
          <i class="fas fa-arrow-right"></i>
          <span class="nav-item">Dropout</span>
        </a></li>
        <li><a href="complete.php">
          <i class="fas fa-star"></i>
          <span class="nav-item">Complete</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="index.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>