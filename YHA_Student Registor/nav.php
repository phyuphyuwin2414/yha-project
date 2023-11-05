
<style>
  /* nav section start */

.nav{
    width: 100%;
    z-index: 99;
}
.nav .img{
    width: 100px;
}
.nav .img img{
    width: 100%;
}
.nav .col-xl-5, .col-xl-7{
    display: flex;
    justify-content: center;
    align-items: center;
}
.nav::before{
    content: '';
    width: 50%;
    position:absolute;
    box-sizing: border-box;
    border-right: 20vh solid transparent;
    border-top: 15vh solid var(--maincolor);
    z-index: -1;
}
.nav .col-xl-5 h4{
    background-color: transparent;
    color: var(--white);
    letter-spacing: 1px;
}
.nav .col-xl-7 a{
    padding: 10px;
    color: var(--bg);
    transition: all .3s ease;
    font-size: 15px;
    letter-spacing: 1px;
}
.nav .col-xl-7 i{
    color: orangered;
    background: var(--ab_bg);
    padding: 10px;
    border-radius: 50%;
}
.nav .col-xl-7 a:hover{
    color: var(--maincolor);
}
.nav .col-xl-7 .active{
    color: var(--maincolor);
}
.nav .rightmenu{
    display: none;
}

/* nav section end */
</style>

<nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="img/yha_logo.png">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Admins</span>
        </a></li>
        <li><a href="re_form.php">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Registration</span>
        </a></li>
        <li><a href="01.php">
          <i class="fas fa-file"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="status2.php">
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