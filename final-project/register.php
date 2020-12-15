<?php include('includes/login_header.php'); ?>
<!-- ^^^ Header Include -->

<article>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){echo $_POST['first_name'];} ?>">

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){echo $_POST['last_name'];} ?>">

        <label>Call Sign / Handle</label>
        <input type="text" name="user_name" value="<?php if(isset($_POST['user_name'])){echo $_POST['user_name'];} ?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">

        <label>Password</label>
        <input type="password" name="password1">

        <label>Confirm Password</label>
        <input type="password" name="password2">

        <button type="submit" class="btn" name="reg_user">Register</button>

        <?php include('includes/errors.php'); ?>

    </fieldset>
</form>

</article>

<p class="center">Already a member? <a href="login.php">Please log in!</a></p>

<!-- vvv Footer Include -->
<?php include('includes/footer.php'); ?>