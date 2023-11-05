<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="img/logo.png" rel="icon"/>
    <title>Student's TimeTable And Attendance</title>
    <!-- ===== STYLE.CSS ===== -->
    <link rel="stylesheet" href="css/test.css" />

    <!-- ===== BOXICONS CDN ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- ===== HEADER ===== -->
    <header class="header container">
      <!--  ===== NAVBAR ===== -->
      <nav class="navbar">
        <!--  ===== LOGO ===== -->
        <div class="logo">
          <a href="#">
            <img
              src="img/yha.jpg"
              alt="graduation-hat"
              class="logo_img"
            />
            <span>YHA Computer Training Center</span>
          </a>
        </div>
        <!--  ===== NAV-MENU ===== -->
        <div class="nav_menu">
          <ul class="nav_menu_list">
            <li class="nav_menu_list_item">
              <a href="#" class="nav_link">home</a>
            </li>
            <li class="nav_menu_list_item">
              <a href="#" class="nav_link">TimeTable</a>
            </li>
            <li class="nav_menu_list_item">
              <a href="newattendance.php" class="nav_link">Attendance</a>
            </li>
            <li class="nav_menu_list_item">
              <a href="#" class="nav_link">about</a>
            </li>
            <li class="nav_menu_list_item">
              <a href="#" class="nav_link">contact</a>
            </li>
            <li class="nav_menu_list_item">
              <a href="login1.php"><button class="nav__cta__btn">Login</button></a>
            </li>
          </ul>
        </div>

        <button class="nav_toggle_btn" id="nav_toggle">
          <i class="bx bx-menu bx-sm"></i>
        </button>
      </nav>
    </header>

    <!-- ===== HOME =====  -->
    <main class="container home_wrapper">
      <section class="home">
        <div class="home__data">
          <h2 class="home__title">Welcome Students</h2>
        </div>

        <img src="img/graduation-hat.png" alt="Saturn_img" class="saturn_img" />
      </section>

      <section class="home__img_wrapper">
        <div class="bg_fade_1"></div> 
        <div class="bg_fade_2"></div>

        <img src="img/03.png" alt="hero-img" class="hero_img" />

        <img src="img/graduation-hat.png" alt="saturn_img" class="saturn_img_2" />
      </section>
    </main>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <!-- ===== SCRIPT.JS ===== -->
    <script src="./assets/JS/script.js"></script>
  </body>
</html>
