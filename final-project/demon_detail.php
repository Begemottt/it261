<?php include('includes/header.php'); ?>
<!-- ^^^ Header Include -->

<main class='demon_detail'>
    <?php

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:compendium.php');
}

$sql = 'SELECT  * FROM demons WHERE demon_id = '.$id.'';

// Connect to the database!

$i_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,msqli_connect_error()));
// We extract the data here.

$result = mysqli_query($i_conn, $sql) or die(myerror(__FILE__,__LINE__,mysqli_error($i_conn)));

if (mysqli_num_rows($result) > 0){ // Show the records
    while($row = mysqli_fetch_assoc($result)){
        $demon_id = stripslashes($row['demon_id']);
        $race = stripslashes($row['race']);
        $name = stripslashes($row['name']);
        $origin = stripslashes($row['origin']);
        $description = stripslashes($row['description']);
        $image = stripslashes($row['image']);
        $feedback = '';
    } // End while
} else {
    $feedback = 'Sorry! No demons....';
}

?>
<h1><?php echo $name; ?></h1>
<?php
if($feedback == ''){
    echo '<img id="demon_detail" src="images/'.$image.'" alt="'.$name.'" />';
    echo '<br/>';
    echo '<ul id="demon_detail">';
    echo '<li><b>Demon Name:</b> '.$name.'</li>';
    echo '<li><b>Race:</b> '.$race.'</li>';
    echo '<li><b>Origin:</b> '.$origin.'</li>';
    echo '</ul>';
    echo '<h2>From our records: </h2>';
    echo '<p id="demon_description">'.$description.'</p>';
    echo '<p><a href="compendium.php">Consult the Compendium for more Wisdom.</a></p>';
} else {
    echo $feedback;
}

// Release the web server

@mysqli_free_result($result);

// Close the connection

@mysqli_close($i_conn);
  
?>

<!-- vvv Footer Include -->
<?php include('includes/footer.php'); ?>