<?php include('includes/config.php'); ?>
<!-- ^^^ Config include -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link href='css/styles.css' type='text/css' rel='stylesheet' />
</head>
<body class="<?php echo $body; ?>">

<header>

    <div class="inner-header">
        <img id="logo" src="images/logo.jpg" alt="Logo For Our Website" />
        <nav>

            <?php echo make_links($nav); ?>

        </nav>

    </div>

</header>

<div id="wrapper">