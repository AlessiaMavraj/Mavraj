<?php
$title = 'Rent A Snow - Login';

ob_start(); //buffer pour enregistrer tout sans afficher temporairement
?>
    <h2>Login</h2>
<?php if (isset($error)) : ?>
    <h5><span style="color:#ff0000">Login refusé</span></h5>
<?php endif ?>
    <article>
        <form class='form' method='POST' action="index.php?action=login">
            <div class="container">
                <label for="userEmail"><b>Username</b></label>
                <input type="email" placeholder="Enter email address" name="inputUserEmailAddress" required>

                <label for="userPsw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name  ="inputUserPsw" required>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-default">Login</button>
                <button type="reset" class="btn btn-default">Reset</button>
                <span class="psw">Forgot <a href="">password?</a></span>
            </div>
        </form>
        <div class="container signin">
            <p>Besoin d'un compte <a href="index.php?action=register">Register</a>.</p>
        </div>
    </article>
<?php
$content = ob_get_clean(); //relâche tout ce que PHP a stocké
require 'gabarit.php';
?>