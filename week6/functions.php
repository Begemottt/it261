<?php

//Functions!
// Let's start off with the famous "hello" function

// function greeting(){
//     echo 'Hello!';
// }

// greeting();

// function greeting(){
//     return 'Hello!';
// }

// $variable = greeting();
// echo $variable;

// Let's create a function to find the area of a rectangle!

function get_area($w, $h){
    $calculation = $w * $h;
    return $calculation;
}

$answer = get_area(10, 20);

echo $answer;

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function my_nav($nav){
    $my_return = implode(', ', $nav);
    return $my_return;
}

echo my_nav($nav);
echo '<br>';

function popup_ad1(){
    echo '
    <h2>This is my first popup ad!</h2>
    <h2>This is my first popup ad!</h2>
    <h2>This is my first popup ad!</h2>
    <h2>This is my first popup ad!</h2>
    <h2>This is my first popup ad!</h2>
    <h2>This is my first popup ad!</h2>
    <h2>This is my first popup ad!</h2>
    ';
}

popup_ad1();

function popup_ad2(){
    $variable = '
    <h2> This is my second popup ad!</h2>
    <img src="images/vote.jpg" alt="I voted" />
    <h2>I voted today!!</h2>
    ';

    return $variable;

}

echo popup_ad2();

?>