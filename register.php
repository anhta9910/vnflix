<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST["submitButton"])) {
        
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

        $account->validateFirstName($firstName);
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
                <h3>Sign Up</h3>
                <span> to continue  to VNFLIX</span>
                
            </div>
        
            <form action="" method="POST">
                
                <?php  echo $account->getError("First name wrong length") ; ?>
                <input type="text" name="firstName"  placeholder="First Name" required>

                <input type="text" name="lastName"  placeholder="Last Name" required> 

                <input type="text" name="username"  placeholder="User Name" required> 

                <input type="email" name="email"  placeholder="Email" required>

                <input type="email" name="email2"  placeholder="Confirm Email" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="password2" placeholder="Confirm Password" required>

                <input type="submit" name="submitButton" value="SUBMIT">
            
            </form>

            <a href="login.php" class="signInMessage"> Already have an account ? Sign In Here !</a>


        </div>

    </div>
</body>
</html>