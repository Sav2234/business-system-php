<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form">
            <form action="signup.inc.php" method="post">
                <input type="text" name="name" placeholder="full name...">
                <input type="text" name="enail" placeholder="email...">
                <input type="text" name="uid" placeholder="username...">
                <input type="password" name="pwd" placeholder="password...">
                <input type="password" name="pwdrepeat" placeholder="reenter password...">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </section>



<?php
    include_once 'footer.php';
?>