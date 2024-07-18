<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/apps/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8ef1de9f50.js" crossorigin="anonymous"></script>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital@0;1&display=swap" rel="stylesheet">
<!-- custom styling -->
<link rel="stylesheet" href="assets/css/style.css">
    <title>Register</title>
    
    <meta name="viewport"
    content="width=device-width,initial-scale = 1.0">
</head>
<body>
<?php include(ROOT_PATH."/apps/includes/header.php"); ?>


    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>
            <?php include(ROOT_PATH."/apps/helpers/formErrors.php"); ?>

            
            <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username?>" class="text-input">
            </div>
            
            <div>
                <label>Email</label>
                <input type="text" name="email"value="<?php echo $email?>" class="text-input">
                </div>
                
            <div>
                <label>Password</label>
                <input type="text" name="password" value="<?php echo $password?>" class="text-input">
                </div>
                
            <div>
                <label>Password Confirmation</label>
                <input type="text" name="passwordConf" value="<?php echo $passwordConf?>" class="text-input">
                </div>
                <div>
                    <button type="submit" name="register-btn" class=" btn btn-big">Register</button>
                </div>
                <p>Or <a href="<?php echo BASE_URL.'/login.php'?>">Sign In</a></p>
                
        </form>
    </div>
    <!--jquery-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!--slick carousel-->
   <!-- custom script -->
   <script src = "assets/js/script.js"></script>
   </body>
</html>
