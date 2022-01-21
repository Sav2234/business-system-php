<?php
    include_once 'header.php';
?>

    <section class="login-form">
        <h2>Login</h2>
        <div class="login-form-form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="name" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Reenter Password...">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </section>



<?php
    include_once 'footer.php';
?>