<!DOCTYPE html>

<?php
require_once 'header.php';
if (isset($_SESSION['userId']) && isset($_SESSION['userName'])) {
    header("Location: ./main.php");
}
?>
<div class="wrap">
    <div class="login-box">
        <div class="login-container">
            <p class="login-phrase">Logowanie</p>
            <form action="includes/php/login.php" method="post">
                <input class="login-input UID" name="login" placeholder=" Wprowadz swoj login..." type="text" />
                <input class="login-input UPW" name="password" placeholder=" Wprowadz swoje haslo..." type="password" />
                <input class="login-input submit login" name="login-submit" value="Zaloguj" type="submit" />
                <input name="userType" value="none" id="userChoice" style="display:none"/>
            </form>
 
            <button class="login-input user" value="parent">
                Rodzic
            </button>
 
            <button class="login-input user" value="student">
                Uczeń
            </button>
            <button class="login-input user"  value="teacher">
                Nauczyciel
            </button>
 
 
            <button class="login-input submit back">
                Wstecz
            </button>
           
 
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>
