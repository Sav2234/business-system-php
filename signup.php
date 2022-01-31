<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full Name...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Reenter Password...">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </section>

    <?php
        if isset($_GET["error"])) { if ($_GET["error"] == "emptyinput") 
            { echo "<p>Please fill in ALL FIELDS!</p>" }

        else if ($_GET["error"] == "invaliduid") 
            { echo "<p>Choose a valid username</p>" }

        else if ($_GET["error"] == "invalidemail") 
            { echo "<p>Choose a valid email</p>" 
            } 
        else if ($_GET["error"] == "passwordsdontmatch") 
            { echo "<p>Passwords in fields do not match</p>" }

        else if ($_GET["error"] == "stmtfailed") 
            { echo "<p>Unknown error, try again</p>" }

        else if ($_GET["error"] == "usernametaken") 
            { echo "<p>Username already in use</p>" }
             
        else if ($_GET["error"] == "none") 
            { echo "<p>You have successfully signed up!</p>" } }
    ?>

<?php
    include_once 'footer.php';
?>