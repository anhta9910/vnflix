<?php
    if(isset($_POST["submitButton"]))   {
        echo "Form was Submit";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to VNFLIX</title>
    <link rel="stylesheet" href="assets/style/style.css" type="text/css">
</head>
<body>
    <div class="signInContainer">

        <div class="column">
            
            <div class="header">
                <img src="assets/images/vnflix.png" title="Logo" alt="Site logo">
                <h3>Sign In</h3>
                <span> to continue  to VNFLIX</span>
                
            </div>
        
            <form action="" method="POST">
                
                

                <input type="text" name="username" id="" placeholder="User Name" required> 

                <input type="password" name="password" id="" placeholder="Password" required>

                <input type="submit" name="submitButton" id="" value="SUBMIT">
            
            </form>

            <a href="register.php" class="signInMessage"> Need an account ? Sign Up Here !</a>


        </div>

    </div>
</body>
</html>