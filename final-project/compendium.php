<?php include('includes/header.php'); ?>
<!-- ^^^ Header Include -->

        <article>
        <?php

$sql = 'SELECT  * FROM demons';

$i_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,msqli_connect_error()));
// We extract the data here.

$result = mysqli_query($i_conn, $sql) or die(myerror(__FILE__,__LINE__,mysqli_error($i_conn)));

// Do we have more than 0 rows?

if (mysqli_num_rows($result) > 0){ // Show the records
    while($row = mysqli_fetch_assoc($result)){
        // This array will display the contents of your row
        echo '<ul class="demons">'; // Use a similar a href's value that we used for our switch assignment
        echo '<li class="bold"><a href="demon_detail.php?id='.$row['demon_id'].'">'.$row['name'].'</a></li>';
        echo '<li><img src="images/'.$row['image'].'" class="thumb" /></li>';
        echo '<li class="subtitle">Race: '.$row['race'].'</li>';
        echo '</ul>';
    } // End while
} else { // what if there are no mobile suits?
    echo 'Nobody here!';
} // End else

// Release the web server

@mysqli_free_result($result);

// Close the connection

@mysqli_close($i_conn);

    ?>
    </article>

<!-- vvv Footer Include -->
<?php include('includes/footer.php'); ?>