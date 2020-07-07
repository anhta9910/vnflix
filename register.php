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
            <form action="" method="POST">
                
                <input type="text" name="firstName" id="" placeholder="First Name" required>

                <input type="text" name="lastName" id="" placeholder="Last Name" required> 

                <input type="text" name="username" id="" placeholder="User Name" required> 

                <input type="email" name="email" id="" placeholder="Email" required>

                <input type="email" name="email2" id="" placeholder="Confirm Email" required>

                <input type="password" name="password" id="" placeholder="Password" required>

                <input type="password" name="password2" id="" placeholder="Confirm Password" required>

                <input type="submit" name="submitButton" id="" value="SUBMIT">
            
            </form>
        </div>

    </div>
</body>
</html>