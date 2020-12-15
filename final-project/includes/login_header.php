<?php
include('includes/config.php');
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <!-- Header menu -->
    <header>
    <nav>
        <!-- Logo goes here -->
        <img src='images/smt_logo_small.png' id="logo" />
        <!-- Navigation menu function -->
        <?php echo make_links($nav); ?>
        <!-- User name + online status -->
        
    </nav>
    </header>
    <main>
        <h1><?php echo $main_headline; ?></h1>