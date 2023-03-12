<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration-Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
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
    <h3>Sign up and start learning</h3>
            <form action="registration.php" method = "post">
                    
                    <!-- <label > Username</label> -->
                    <input type="text" name ="user" placeholder ="Username" required>
                    <input type="text" name ="uemail" placeholder ="Email" required>
                    <!-- <label > Password</label> -->
                    <input type="password" name ="password" placeholder ="Password" required>
                    <div class="check">
                        <input type="checkbox" name="checkbox" id="check">
                        <p>Send me special offers, personalized recommendations, and learning tips.</p>
                    </div>
                    <button type="submit"> Sign up</button>

                    <span>By signing up, you agree to our <u>Terms of Use</u> and <u>Privacy Policy</u></span>

                    <hr>

                    <p id="para">Already have an account?<a href="login.php"><u> Log in </u><a></span></p>

            </form>
        </div>
</body>
</html>