<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image Using JavaScript - Easy Tutorials</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        font-family:'Poppins',sans-serif;
        box-sizing:border-box;
    }
    .hero{
        background:#d1d1d1;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .card{
        background:#fff;
        border-radius:15px;
        text-align:center;
        color:#333;
    }
    .card h1{
        font-weight:500;
        color:#000;
    }
    .card img{
        width:180px;
        height:180px;
        border-radius:50%;
        margin-top:40px;
        margin-bottom:30px;
    }
    label[for="input-file"]{
        display:block;
        width:200px;
        background:#e3362c;
        color:#fff;
        padding:12px;
        margin:10px auto;
        border-radius:5px;
        cursor:pointer;
    }
    #input-file{
        display:none;
    }
</style>
<body>
    <div class="hero">
        <div class="card">
            <img src="img/noprofil.jpg" alt="" id="profile-pic">
            <label for="input-file">Upload image</label>
            <!---->
            <input type="file" name="stimg" accept="img/jpeg, img/png, img/jpg" value="<?php if(isset($_POST['stimg'])){ echo $_POST['stimg'];}?>" id="input-file">
            <input type="hidden" name="old_img" accept="img/jpeg, img/png, img/jpg" id="input-file" value="<?php echo $stimg; ?>" style="padding-top:10px;">
            <!---->
        </div>
    </div>
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>