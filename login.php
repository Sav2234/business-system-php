<?php
    include_once 'header.php';
?>

    <section class="login-form">
        <h2>Login</h2>
        <div class="login-form-form">
            <form action="login.inc.php" method="post">
                <input type="text" name="name" placeholder="username/email...">
                <input type="password" name="pwd" placeholder="password...">
                <input type="password" name="pwdrepeat" placeholder="reenter password...">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </section>



<?php
    include_once 'footer.php';
?>