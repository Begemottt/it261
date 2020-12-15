<?php
ob_start(); // Prevents header errors before reading the whole page
define('DEBUG', 'TRUE'); // We want to see our errors!

include('credentials.php'); // The PHP credentials, allows us to get into our database

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Switch for individual page variables
switch(THIS_PAGE){
    case 'index.php' : 
        $title = 'Tokyo Hunter Association';
        $main_headline = 'Hunter Association';
    break;

    case 'about.php' : 
        $title = 'About Us';
        $main_headline = 'What is the Hunter Association?';
    break;

    case 'daily.php' : 
        $title = 'Daily Advice';
        $main_headline = '';
    break;

    case 'compendium.php' : 
        $title = 'The Demon Compendium';
        $main_headline = 'The Demon Compendium';
    break;

    case 'demon_detail.php' : 
        $title = 'Detail Demon Information';
        $main_headline = '';
    break;

    case 'quest.php' : 
        $title = 'Make a Request';
        $main_headline = 'We Are Here To Help!';
    break;

    case 'thx.php' : 
        $title = 'Our Thank You Page';
        $main_headline = 'Thanks For Filling Out Our Form!!';
    break;

    case 'login.php' :
        $title = 'Log In';
        $main_headline = 'Please Log In to View the Site';
    break;

    case 'register.php' :
        $title = 'Hunter Registration';
        $main_headline = 'Register as an Official Hunter Today!';
    break;
} // End switch

// Array for the nav menu
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily Advice';
$nav['compendium.php'] = 'Compendium';
$nav['quest.php'] = 'Request';

// Function to create the navigation menu
function make_links($nav){
    $my_return = '';

    $my_return .= '<ul id="navigation">';

    foreach($nav as $key => $value){

        if(THIS_PAGE == $key){
            $my_return .= '<li><a href="'.$key.'" class="active">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }

    } // End foreach

    $my_return .= '</ul>';

    // Always remember to return $my_return!!
    return $my_return;

} // End function

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// PHP FOR THE EMAILABLE FORM!
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Delcare regular variables
$first_name = '';
$last_name = '';
$phone = '';
$type = '';
$ward = '';
$size = '';
$description = '';
$privacy = '';
// Declare error variables
$first_name_error = '';
$last_name_error = '';
$phone_error = '';
$type_error = '';
$ward_error = '';
$size_error = '';
$description_error = '';
$privacy_error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // We need to declare our errors, i.e if a field is empty, do something - more or less, we are going to declare a whole bunch of if statements and after-
    // wards, if all the if statements are true, then yippy and skippy!

    if(empty($_POST['first_name'])){
        $first_name_error = 'Please fill in your first name.';
        $first_error = 'first_error';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])){
        $last_name_error = 'Please fill in your last name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['phone'])){
        $phone_error = 'Please fill in your telephone number.';
    } else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['type'])){
        $type_error = 'Please select a type of mission.';
    } else {
        $type = $_POST['type'];
    }

    if(empty($_POST['ward'])){
        $type_error = 'Please select your location.';
    } else {
        $ward = $_POST['ward'];
    }

    // if( $type = 'personal'){
    //     $commercial = 'checked';
    // } elseif($type = 'advertising'){
    //     $advertising = 'checked';
    // } elseif($type = 'commercial'){
    //     $commercial = 'checked';
    // } elseif($type = 'event'){
    //     $event = 'checked';
    // } elseif($type = 'info'){
    //     $info = 'checked';
    // }

    if(empty($_POST['size'])){
        $size_error = 'Please select a website size.';
    } else {
        $size = $_POST['size'];
    }

    if(empty($_POST['description'])){
        $description_error = 'Please give a description!';
    } else {
        $description = $_POST['description'];
    }

    if(empty($_POST['privacy'])){
        $privacy_error = 'Please agree to our Privacy Rules!!';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_error = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_error = 'Invalid format!';
        } else{
            $phone = $_POST['phone'];
        }
    }

    if(isset($_POST['first_name'],
    $_POST['last_name'], 
    $_POST['phone'], 
    $_POST['type'], 
    $_POST['ward'], 
    $_POST['description'], 
    $_POST['privacy']
    )){
        $to = 'poliosis@gmail.com';
        $subject = 'Test Email: '.date('m/d/y');
        $body = ''.$first_name.' '.$last_name.' has filled out your form!'.PHP_EOL.'';
        $body = 'Their closes HA location is in [ '.$ward.' ].'.PHP_EOL.'';
        $body .= 'Phone Number: '.$phone.PHP_EOL.'';
        $body .= 'They are interested in a [ '.$type.' ] mission'.PHP_EOL.'';
        $body .= 'Description of their prospective mission: '.$description.PHP_EOL.'';

        $headers = array(
            'From' => 'no-reply@rtvgilder.com',
            'Reply-to' => $email

        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');

    } // End isset

} // close server




// PLEASE REMEMBER  - THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE!
function my_errors($my_file, $my_line, $error_message){

    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b>'.$my_file.'</b> on line <b>'.$my_line.'</b>.';
        echo 'Error messsage: <b>'.$error_message.'</b>.';
        die();
    } else {
        echo 'Woops! Something went wrong.';
        die();
    }
}