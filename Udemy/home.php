<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web pract</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="header">
        <div class="nav">
            <div class="logo"><img src="./images/img1.png" alt="logo"></div>
           
            <label for="label">Cotegries</label>
            <div class="search">
                <i class="bi bi-search"></i>
            <input type="text" placeholder="Search for anything">   
        </div>
            <ul>
                <li>Udemey Buiness</li>
                <li>Take on Udemey</li>

            </ul>
            <!-- <div class="btn-box">    
                <a href="login.php"><input type="submit" class="btn" value="Log in"></a>
               <a href="signin.php"><input type="Submit" class="btn btn2" value="Sign up"></a> 
            </div> -->

            <div class="prof">
                <h3><?php echo $_SESSION['username']?></h3>
                <!-- <i class="bi bi-person-circle"></i> -->
                <a href="logout.php"><img src="./images/logout.png" alt=""></a>

            </div>
          

        </div>
    </div>

    <div class="container">
        <div class="left-div">
            <img src="./images/img4.png" alt="">
            <p>Your company can give you access to our <br> 19,000+ 
                business and tech courses.</p>

            <input type="submit" class="btn btn3" value="Learn More">

        </div>
        <div class="righ-div">
            <img src="./images/img5.png" alt="">
        </div>
    </div>
</body>
</html>