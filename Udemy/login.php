<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login-Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="header">
        <div class="nav">
           <a href="index.php"><div class="logo"><img src="./images/img1.png" alt="logo"></div></a>
           
            <label for="label">Cotegries</label>
            <div class="search">
                <i class="bi bi-search"></i>
            <input type="text" placeholder="Search for anything">   
        </div>
            <ul>
                <li>Udemey Buiness</li>
                <li>Take on Udemey</li>

            </ul>
            <div class="btn-box">    
                <a href="login.php"><input type="submit" class="btn" value="Log in"></a>
               <a href="signin.php"><input type="Submit" class="btn btn2" value="Sign up"></a> 
            </div>
          

        </div>
    </div>
    <div class="login-box">
        <h3>Login to your Udemy account</h3>
        <form action="validation.php" method = "post">
            <label > 
                <img src="./images/google.png" alt="">
                Continue with Google</label>
            <label > 
                <img src="./images/fb.png" alt="">     
                Continue with Facebook</label>
            <label > 
            <img src="./images/apple-logo.png" alt="">   
            Continue with Apple</label>
            <!-- <label > Username</label> -->
            <input type="text" name ="user" placeholder ="Username" required>
            <!-- <label > Password</label> -->
            <input type="password" name ="password" placeholder ="Password" required>
            <button type="submit"> Log in</button>

            <p id ="para2"> or 
                    <a href="#"> Forgot Password</a>
                
                </p>
                <hr>
                <p id ="para1">Don't have an account? <a href="signin.php">Sign Up</a>
                <br>
                <a href="#"> Login with your organization </a>
            </p>
        </form>
    </div>
    
</body>
</html>