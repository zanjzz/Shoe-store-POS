<?php 

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'> $error </p>" : '';

}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<?php include 'head.php' ?>


<div class="login-container">
    <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
        <form class="login-form" action="account_login_register.php" method="post">
            <h2>Login</h2>
            <?= showError($errors['login']); ?>

            <input type="hidden" name="login" value="1">
            <!-- From Uiverse.io by AbanoubMagdy1 --> 
            <div class="wave-group">
                <input required="" type="text" name="username" class="input">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">U</span>
                    <span class="label-char" style="--index: 1">s</span>
                    <span class="label-char" style="--index: 2">e</span>
                    <span class="label-char" style="--index: 3">r</span>
                    <span class="label-char" style="--index: 4">n</span>
                    <span class="label-char" style="--index: 5">a</span>
                    <span class="label-char" style="--index: 6">m</span>
                    <span class="label-char" style="--index: 7">e</span>
                </label>
            </div>

             <div class="wave-group">
                <input required="" type="password" name="password" class="input">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">P</span>
                    <span class="label-char" style="--index: 1">a</span>
                    <span class="label-char" style="--index: 2">s</span>
                    <span class="label-char" style="--index: 3">s</span>
                    <span class="label-char" style="--index: 4">w</span>
                    <span class="label-char" style="--index: 5">o</span>
                    <span class="label-char" style="--index: 6">r</span>
                    <span class="label-char" style="--index: 7">d</span>
                </label>
            </div>
           
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register here</a></p>
         </form>
        <div class="login-image" id="login-image"></div>
           
    </div> 


        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <form class="login-form" action="account_login_register.php" method="post">
            <h2>Register</h2>
             <?= showError($errors['register']) ?>
            <input type="hidden" name="register" value="1">
            <!-- From Uiverse.io by AbanoubMagdy1 --> 
            <div class="wave-group">
                <input required="" type="text" name="fullname" class="input">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">F</span>
                    <span class="label-char" style="--index: 1">u</span>
                    <span class="label-char" style="--index: 2">l</span>
                    <span class="label-char" style="--index: 3">l</span>
                    <span class="label-char" style="--index: 4">n</span>
                    <span class="label-char" style="--index: 5">a</span>
                    <span class="label-char" style="--index: 6">m</span>
                    <span class="label-char" style="--index: 7">e</span>
                </label>
            </div>
            
            <div class="wave-group">
                <input required="" type="text" name="username" class="input">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">U</span>
                    <span class="label-char" style="--index: 1">s</span>
                    <span class="label-char" style="--index: 2">e</span>
                    <span class="label-char" style="--index: 3">r</span>
                    <span class="label-char" style="--index: 4">n</span>
                    <span class="label-char" style="--index: 5">a</span>
                    <span class="label-char" style="--index: 6">m</span>
                    <span class="label-char" style="--index: 7">e</span>
                </label>
            </div>

             <div class="wave-group">
                <input required="" type="password" name="password" class="input">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">P</span>
                    <span class="label-char" style="--index: 1">a</span>
                    <span class="label-char" style="--index: 2">s</span>
                    <span class="label-char" style="--index: 3">s</span>
                    <span class="label-char" style="--index: 4">w</span>
                    <span class="label-char" style="--index: 5">o</span>
                    <span class="label-char" style="--index: 6">r</span>
                    <span class="label-char" style="--index: 7">d</span>
                </label>
            </div>

             <select name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="Administrator">Admin</option>
                <option value="Manager">Manager</option>
                <option value="Cashier">Cashier</option>
            </select>

            <button type="submit">Register</button>
            <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login here</a></p>
        </form>
        <div class="login-image" id="register-image"></div>
    </div>
</div>
<script src="script.js"></script>