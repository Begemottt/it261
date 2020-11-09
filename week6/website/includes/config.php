<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php' : 
        $title = 'Home Page For Our New Website';
        $main_headline = 'Welcome To Our Home Page!';
        $center = 'center';
        $body = 'home';
    break;

    case 'about.php' : 
        $title = 'About Page For Our New Website';
        $main_headline = 'Welcome To Our Wonderful About Page!';
        $center = 'center';
        $body = 'about inner';
    break;

    case 'daily.php' : 
        $title = 'Daily Page';
        $main_headline = 'Welcome To The Daily';
        $center = 'center';
        $body = 'daily inner';
    break;

    case 'customers.php' : 
        $title = 'Our Very Important Customers';
        $main_headline = 'Hello Customers - Good To See You!';
        $center = 'center';
        $body = 'customers inner';
    break;

    case 'contact.php' : 
        $title = 'Contact Us Today!';
        $main_headline = 'Welcome To Our Contact Page!';
        $center = 'center';
        $body = 'contact inner';
    break;

    case 'gallery.php' : 
        $title = 'Check Out Our Gallery';
        $main_headline = '';
        $center = 'center';
        $body = 'gallery inner';
    break;
} // End switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav){
    $my_return = '';

    $my_return .= '<ul>';

    foreach($nav as $key => $value){

        if(THIS_PAGE == $key){
            $my_return .= '<li><a href="'.$key.'" class="active">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }

    } // End foreach

    $my_return .= '</ul>';

    // Akways renenber to return $my_return!!
    return $my_return;

} // End function

$photos = ['photo1', 'photo2', 'photo3', 'photo4', 'photo5'];
function rand_images($array){
    $rannum = rand(0, count($array)-1);
    return '<image src="images/'.$array[$rannum].'.PNG" alt="photo'.($rannum + 1).'" ?>';
}

?>