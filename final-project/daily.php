<?php
include('includes/header.php');
include('includes/switch.php');
?>

<!-- ^^^ Header Include -->

        <article>
            <h1>Today is <?php echo $today; ?>!</h1>
            <img src='images/<?php echo $image; ?>' alt='<?php echo $alt; ?>' class='daily'>
            <p>Today's advice is:</p>
            <p id='advice'><?php echo $content; ?></p>
        </article>
        <!-- Sidebar content -->
        <aside>
            <h2>Try out different days!</h2>
            <ul id="day_list">
                <li><p><a href='daily.php?today=Sunday'>Sunday</a></p></li>
                <li><p><a href='daily.php?today=Monday'>Monday</a></p></li>
                <li><p><a href='daily.php?today=Tuesday'>Tuesday</a></p></li>
                <li><p><a href='daily.php?today=Wednesday'>Wednesday</a></p></li>
                <li><p><a href='daily.php?today=Thursday'>Thursday</a></p></li>
                <li><p><a href='daily.php?today=Friday'>Friday</a></p></li>
                <li><p><a href='daily.php?today=Saturday'>Saturday</a></p></li>
            </ul>
        </aside>

<!-- vvv Footer Include -->
<?php include('includes/footer.php'); ?>