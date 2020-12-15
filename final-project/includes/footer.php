</main>
<footer>
    <ul>
        <li>Copyright &copy; <?php 
            $start_date = '2020';
            $current_date = date('Y');
            if ($start_date == $current_date) {
                echo $current_date;
            } else {
                echo $start_date.' - '.$current_date;
            }
        ; ?></li>
        <li>All Rights Reserved</li>
        <li>Web Design By <a href="../../about.html">Robin VanGilder</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
</footer>
</body>
</html>