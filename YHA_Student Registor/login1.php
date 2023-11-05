<?php session_start(); ?>
<?php
    
    if(isset($_POST['login'])){
        $phno=$_POST['ph'];
        $pass=$_POST['pass'];
        $con=mysqli_connect("localhost:3306","root","","yha") or die('Error! not');
        $sql="SELECT * FROM login_sample WHERE ph = '$phno' AND password = '$pass'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['phno'] = $row['ph'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['login']= true;
            header("location:newattendance.php");
        }else{
            echo '<script>alert("Wrong Phone number or password");</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login1.css">
    <link rel="shortcut icon" href="img/logo01.png" type=""/>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Quicksand:wght@300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Quicksand:wght@300;400;500;600;700&family=Satisfy&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
    font-family: 'Quicksand', sans-serif;}
:root{
    --maincolor: #ff6b01;
    --side-orange: #ff852d;
    --white: #ffffff;
    --sec-white: rgb(231, 231, 231);
    --bg: black;
    --ab_bg: rgb(243, 243, 243);
  }
html{
    overflow-x: hidden;
    scroll-padding-top: 9px;
    scroll-behavior: smooth;
}
html::-webkit-scrollbar{
    width: 7px;
    background: var(--sec-white);
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background: var(--maincolor);
    border-radius: 5px;
}
a{
    text-decoration: none;
}
body{
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
    overflow: hidden;
    background: url(img/slider1.JPG);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.main{
  background-color: rgb(51, 65, 83);
  width: 100%;
  height: 100%;
  position: absolute;
  transform: translate(0%, 0%);
  top: 0;
  left: 0;
  z-index: -99;
  opacity: .5;
}
.container, .row, .center{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
}
.left{
    width: 30%;
    height: 70%;
    background-color: var(--side-orange);
    border-radius: 10px 0px 0px 10px;
}
.heading{
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 20px 0px;
}
.heading span{
  color: rgb(207, 207, 207);
  font-weight: 600;
}
.left #welcome{
  font-family: 'Satisfy', cursive;
  color: var(--white);
  font-size: 40px;
  margin-top: 40px;
}

.right{
    width: 70%;
    height: 70%;
    background-color: var(--white);
    border-radius: 0px 10px 10px 0px;
}
form{
  margin-top: 20px;
}
h4{
  color: var(--maincolor);
  letter-spacing: 1px;
}
.input-group {
    position: relative;
    margin: 20px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.inputgp{
  width: 50%;
  border: 1px solid var(--maincolor);
  text-align: start;
  border-radius: 5px;
}
.inputgp button{
  outline: none;
  border: none;
  background: transparent;
}
.inputgp #hide1,#hide2{
  display: none;
}

.input{
    width: 90%;
    padding: 5px 10px;
    outline: none;
    border: none;
    outline: none;
    background: transparent;
}
#show i{
  color: var(--maincolor);
}

.user-label {
    position: absolute;
    left: 210px;
    top: -10px;
    color: rgb(182, 182, 182);
    pointer-events: none;
    transform: translateY(1rem);
    transition: 150ms cubic-bezier(0.4,0,0.2,1);
    
}
/* .input:focus, input:valid {
    outline: none;
    border: 1.5px solid rgb(182, 182, 182);
} */

.input:focus ~ label, input:valid ~ label {
    transform: translate(-40%,-60%) scale(0.8);
    padding: 5px;
    color: var(--maincolor);
}
#login{
  width: 50%;
  padding: 5px 0px;
  border: none;
  background-color: var(--maincolor);
  color: var(--white);
  border-radius: 5px;
  transition: all .3s ease;
}
#login:hover{
  background-color: rgb(228, 228, 228);
  color: var(--maincolor);
}
.turn{
  margin-top: 20px;
  width: 100%;
  justify-content: space-evenly;
}
.turn span{
  color: grey;
  margin:0px;
}
.turn button{
  border: none;
}
.turn i{ 
  cursor: pointer;
  color: var(--maincolor);
}

.container img{
  width: 13%;
  position: absolute;
  transform: translateX( -120%);
}

.flip-card {
    width: 100%;
    height: 100%;
    perspective: 1000px;
    font-family: sans-serif;
  }
  
  .title {
    font-weight: 600;
    margin: 0;
  }
  
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: all 0.8s;
    transform-style: preserve-3d;
    text-align: center;
  }
.flip-card-front, .flip-card-back {
    box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  
  .flip-card-front {
    color: coral;
  }
  
.flip-card-back {
    transform: rotateY(180deg);
  }

@media screen and (max-width:992px) {
    .center{
        display: flex;
        flex-direction: column;
    }
    .center .left{
        width: 100%;
        height: 20%;
    }
    .center .right{
        width: 100%;
        
    }
    .left #welcome{
        
        margin-top: 20px;
    }
    .left{
        border-radius: 10px 10px 0px 0px;
    }
    .right{
        border-radius: 0px 0px 10px 10px;
    }
    .input:focus ~ label, input:valid ~ label {
        transform: translate(-28%,-60%) scale(0.8);
    }
  }
  @media screen and (max-width: 767px) {
    .user-label {
        left: 30px;
    }
    .inputgp{
        width: 90%;
    }
    input[type=password]{
    width: 90%;
    }
    input[type=text]{
        width: 90%;
    }
  
  }
  @media screen and (max-width: 425px) {
    .input{
        width: 100%;
    } 
    .user-label {
        left: 20px;
    }
    .inputgp{
        width: 90%;
    }
    input[type=password]{
    width: 90%;
    }
    input[type=text]{
        width: 90%;
    }
  }
</style>
<body>

    <div class="main"></div>
    <div class="container w-100 h-100">
        <img src="img/logo.png" alt="">
        <div class="row w-100 h-100">
            <div class="center w-100 h-100">
                <div class="left">
                    
                    <div class="heading">
                        <h4 id="welcome">Welcome Back</h4>
                        <img src="img/" alt="">
                        <span>Build Your Future With Technology</span>
                    </div>
                    
                </div>
                <div class="right">
                    <div class="flip-card ">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="title">
                                    <h4>Login Account</h4>
                                </div>
                                <form action="" method="post">
                                 <div class="input-group">
                                        <div class="inputgp">
                                            <input required type="text" name="phno" autocomplete="off" class="input">
                                            <label class="user-label">Phone Number  </label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="inputgp">
                                            <input required id="password" type="password" name="pass" autocomplete="off" class="input">
                                            <label class="user-label">Password</label>
                                            <span id="show">
                                            </span>
                                        </div> 
                                    </div>
                                    <input type="submit" name="login" value="Login" id="login">
                                    
                                </form>
                                <div class="turn d-flex">
                                    <a href="index.php"> <abbr title="Back To Home Page"><i class="fa-solid fa-arrow-left"></i></abbr> </a>
                                    <span>Doesn't have account?</span>
                                    <button id="turnon">Sign Up</button>
                                </div>
                                
                            </div>

                            


                            <div class="flip-card-back">
                                <div class="title">
                                    <h4>Sign-up Account</h4>
                                </div>     
                                <form action="" method="post">
                                <div class="input-group">
                                        <div class="inputgp">
                                            <input required="" type="text" name="ph" autocomplete="off" class="input">
                                            <label class="user-label">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="inputgp">
                                            <input required="" type="text" name="nam" autocomplete="off" class="input">
                                            <label class="user-label">User Name</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="inputgp">
                                            <input required id="password" type="password" name="passwor" autocomplete="off" class="input">
                                            <label class="user-label">Password</label>
                                            
                                            <span id="show">
                                               
                                            </span> 
                                        </div>
                                        
                                    </div>
                                    <div class="input-group">
                                        <div class="inputgp">
                                            <input required id="password" type="password" name="cpasswor" autocomplete="off" class="input">
                                            <label class="user-label">Confirm Password</label>
                                            
                                            <span id="show">
                                               
                                            </span>
                                        </div>
                                        
                                    </div>
                                    <input type="submit" name="signup" value="SignUp" id="login">
                                    
                                </form>
                                <div class="turn d-flex">
                                    <a href="index.php"> <abbr title="Back To Home Page"><i class="fa-solid fa-arrow-left"></i></abbr> </a>
                                    <span>Already have account?</span>
                                    <button id="turnoff">Login</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php
        if(isset($_POST['signup'])){
            $ph=$_POST['ph'];
            $name=$_POST['nam'];
            $password=$_POST['passwor'];
            $cpassword=$_POST['cpasswor'];
            $con=mysqli_connect("localhost:3306","root","","yha");
            if($con){
                $sql = "INSERT INTO login_sample(phno, password, ph, cpsw) VALUES ('$name','$password',$ph,$cpassword)";
                mysqli_query($con,$sql);

                $sql1 = "INSERT INTO student( student_name, phNo) VALUES ('$name','$ph')";
                mysqli_query($con,$sql1);
                echo '<script>alert("You have been sign up ");</script>';
            }
} 
?>
<script>
    // flipping the card
    let turnon = document.getElementById('turnon');
    let turnoff = document.getElementById('turnoff');
    let flip = document.querySelector(".flip-card-inner");

    turnon.addEventListener("click",function(){
        flip.style.transform = "rotateY(180deg)";
        document.querySelector('#welcome').innerHTML = "Welcome"
        
    })
    turnoff.addEventListener("click",function(){
        flip.style.transform = "rotateY(0deg)";
        document.querySelector('#welcome').innerHTML = "Welcome Back"
    })

    // show and hide password
    var a = 1;
    let show = document.querySelectorAll("#show");

   for(let i = 0; i< show.length; i++){
    show[i].innerHTML = `<i id="show1" class="fa-solid fa-eye"></i>`;
    var a = 0;
    show[i].addEventListener("click", function(){
        if(a == 0){
            show[i].innerHTML = `<i class="fa-solid fa-eye-slash"></i>`;
            let password = document.querySelectorAll("#password")
            password[i].type = 'text'; 
            a = 1;
        } else{
            show[i].innerHTML = `<i class="fa-solid fa-eye"></i>`;
            let password = document.querySelectorAll("#password")
            password[i].type = 'password'; 
            a = 0;
        }
        
        
    } 
    )
   }
    
</script>
</body>
</html>