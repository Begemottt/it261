<?php include('includes/login_header.php'); ?>
<!-- ^^^ Header Include -->

<article>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>

        <label>User Name</label>
        <input type="text" name="user_name" value="<?php if(isset($_POST['user_name'])){echo $_POST['user_name'];} ?>">

        <label>Password</label>
        <input type="password" name="password">

        <?php include('includes/errors.php'); ?>

        <button type="submit" class="btn" name="login_user">Log in</button>

        <button type="reset" class="btn">RESET</button>

    </fieldset>
</form>

</article>

<p class="center">Not registered? <a href="register.php">Go sign up now!</a></p>

<!-- vvv Footer Include -->
<?php include('includes/footer.php'); ?>