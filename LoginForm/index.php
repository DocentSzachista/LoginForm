<?php
require_once 'header.php';
if (isset($_SESSION['userId']) && isset($_SESSION['userName'])) {
    header("Location: ./main.php");
}
?>
<div class="container login-container">
    <form action="./includes/php/login.php" method="POST">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Uczeń</h3>
                <div class="form-group">
                    <input name="login" id="studentUsername" type="text" class="form-control" placeholder="* Login..." value="" />
                </div>
                <div class="form-group">
                    <input type="password" id="studentPassword" class="form-control" placeholder="* Haslo..." value="" />
                </div>
                <div class="form-group">
                    <button id="studentLogin" name="login-submit" class="btn btn-primary" value="student">Zaloguj się</button>
                </div>

            </div>
            <div class="col-md-6 login-form-2">
                <div class="login-logo">
                    <img src="./includes/logo/logo.svg" alt="" />
                </div>
                <h3>Rodzic</h3>
                <div class="form-group">
                    <input type="email" id="parentEmail" class="form-control" placeholder="* Email..." value="" />
                </div>
                <div class="form-group">
                    <input type="password" id="parentPassword" class="form-control" placeholder="* Haslo..." value="" />
                </div>
                <div class="form-group">
                    <button id="parentLogin" name="login-submit" class="btn btn-light" value="parent" type="submit">Zaloguj się</button>
                </div>
            </div>
        </div>
        <input id="userType" style="display:none;" />

    </form>

</div>
<script type="text/javascript" src="./includes/js/scripts.js"></script>




<?php
require_once 'footer.php';
?>