<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login PHP System</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <nav>
        <div class="wrapper">
            <a href="index.php">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                if (iseet($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='logout.php'>Log Out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Signup</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>