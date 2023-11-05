<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/01.css">
</head>
<style>
.col1{
    height:300px;
    background:yellow;
    float:left;
    width:30%;
    max-height:300px;
    overflow-y:scroll;
}
.col2{
    height:300px;
    background:green;
    float:left;
    width:70%;
}
nav{
    width:300px;
}
</style>
<body>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 col1" tabindex="0">
<?php include("nav.php");?>
</div>
    <div class="col2"></div>
</body>
</html>