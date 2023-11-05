<style>
 
    /* footer section */
#footer{
    width: 100%;
    height: auto;
    background-color: rgb(49, 52, 61);
    color: var(--white);
    padding-top: 30px;
}
#footer .container,#footer .row{
    display: flex;
    justify-content: center;
    align-items: center;
}
#footer .col-xl-4{
    line-height: 180%;
    letter-spacing: 2px;
}
#footer ul{
    list-style-type: none;
}
#footer ul li a{
    color: var(--white);
    transition: all .3s ease-in-out;
    font-weight: 300;
}
#footer ul li a:hover{
    font-weight: 400;
    color: var(--maincolor);
}
#footer .img{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#footer img{
    width: 50%;
}
#footer .active{
    color: var(--maincolor);
    font-weight: 400;
}
#footer .copyright{
    height: auto;
    padding: 10px 0px;
    background-color: var(--maincolor);
    text-align: center;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
#footer .copyright .right{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
#footer .copyright i{
    font-size: 18px;
    color: var(--white);
    margin-right: 10px;
    transition: all .3;
}
#footer .copyright i:hover{
    scale: 1.1;
}
/* copy section */


.offcanvas-body .itmes{
    color: var(--bg);
    margin: 10px 0px;
}
.offcanvas-body .items i{
    background-color: transparent;
}



@media (max-width:1200px){
    #footer .col-xl-4 span{
        font-size: 13px;
    }
}

@media (max-width:992px) {
    .top{
        justify-content: center;
        margin-bottom: 10px;
    }
    .top .search{
        padding: 5px 0px;
        width: 100%;
        display: flex;
        justify-content: center;
        background-color: var(--ab_bg);
    }
    .top .search input{
        width: 60%;
        margin-right: 5px;
    }
    .nav::before{
        width: 70%;
        position:absolute;
        box-sizing: border-box;
        border-right: 10vh solid transparent;
        border-top: 15vh solid var(--maincolor);
        z-index: -1;
    }
    .nav .col-xl-7{
        justify-content: space-evenly;
    }
    
    .nav .rightmenu{
        display: inline-block;
    }
    #off{
        display: block;
    }
    .nav #disp, .nav .disp{
        display: none;
    }

    #about, #about .container, #about .row{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    #about #ab_left,#about #ab_right{
        margin: 20px 0px;
    }
    #about .ab_img3{
        width: 30%;
    }
    #stu_number .col-xl-4{
        height: auto;
        padding-top: 20px;
    }
    #stu_number .col-md-12{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    #stu_number .col-xl-4 .card{
        padding-top: 15px;
    }
    #footer .col-xl-4 .img{
        justify-content: start;
        align-items: start;
    }
    #footer .col-xl-4 img{
        width: 20%;
    }
}

@media (max-width: 768px){
    .top .search input{
        width: 60%;
        margin-right: 5px;
    }
    .nav h4{
        font-size: 20px;
    }
    .nav::before{
        display: none;
    }
    .nav {
        background-color: var(--maincolor);
    }
 
    .nav .col-xl-7 .rightmenu{
        color: var(--white);
    }
    #stu_number .col-md-12{
        align-items: start;
    }
    #teacher{
        text-align: center;
    }
    #teacher .col-xl-4{
        margin-top: 10px;
    }
    #teacher img{
        width: 50%;
    }
    #footer .right{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
}

@media (max-width: 576px){
    .top span{
        font-size: 11px;
        margin: 5px 0px;
        font-weight: bold;
    }
    .nav h4{
        font-size: 17px;
    }
    #contact iframe{
        height: 300px;
    }
    #contact .right .text{
        height: 300px;
    }
    #footer .copyright{
        display: flex;
        flex-direction: column;
    }
    #footer .right{
        margin: 5px 0px;
        width: 100%;
        display: flex;
        justify-content: space-evenly;
    }
    #footer .col-xl-4 span{
        font-size: 15px;
    }
}

</style>

<div style="overflow: hidden; margin-top: 150px;">
      <svg
        preserveAspectRatio="none"
        viewBox="0 0 1200 120"
        xmlns="http://www.w3.org/2000/svg"
        style="fill: rgb(49, 52, 61); width: 100%; height: 100px; transform: rotate(180deg);"
      >
        <path d="M321.39 56.44c58-10.79 114.16-30.13 172-41.86 82.39-16.72 168.19-17.73 250.45-.39C823.78 31 906.67 72 985.66 92.83c70.05 18.48 146.53 26.09 214.34 3V0H0v27.35a600.21 600.21 0 00321.39 29.09z" />
      </svg>
    </div>
<section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 pt-4">
            <ul>
              <li><a class="active" href="index.php">Home</a></li>
              <li><a href="index.php">About</a></li> 
              <li><a href="courses.php">Courses</a></li>
              <li><a href="index.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 pt-4">
            <ul>
              <li><a href="stu_projects.php">Students Projects</a></li>
              <li><a href="event.php">Events</a></li>
              <li><a href="">Policy</a></li>
              <li><a href="">Rules</a></li>
              <li><a href="">Purpose</a></li>
            </ul>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="img">
              <img src="img/logo.png" alt="">
              <span>Build Your Future With Technology</span>
            </div>
          </div>
          <div class="row copyright">
            <div class="col-6 left">
              <span>Copyright @2023 YHA</span>
            </div>
            <div class="col-6 right">
              <span>Follow us on social media</span>
              <div class="icons">
                <a href="https://www.facebook.com/yhacomputerforyou"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.facebook.com/messages/t/100787362478747"><i class="fa-brands fa-facebook-messenger"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
