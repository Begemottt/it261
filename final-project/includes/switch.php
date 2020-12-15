<?php

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Wednesday': 
        $image = 'jack.png';
        $content = "Remember to be like Jack Frost and always stay cool and collected! You never know what kind of monster is gonna pop out when you're walking the streets of Tokyo, 
            stay grounded and don't panic!";
    break;
    case 'Thursday' :
        $image = 'pixie.jpg';
        $content = "Always keep your health up! If any of your demons are sick or poisoned, make sure to heal 'em up before the next fight, it could mean the difference between 
            life and death!";
    break;
    case 'Friday' :
        $image = 'mokoi.png';
        $content = "It's okay to take it easy sometimes. Don't forget to head back to the local Hunter Association branch and relax when things are too tough. The apocalypse is bad enough!";
    break;
    case 'Saturday' :
        $image = 'pyro.jpg';
        $content = "Pay attention to your enemy's elemental strengths and weaknesses! It will make your fights much easier to win.";
    break;
    case 'Sunday' :
        $image = 'horkos.jpg';
        $content = "Advice writer took the day off. You should too.";
    break;
    case 'Monday':
        $image = 'slime.jpg';
        $content = "Make sure you negotiate with demons whenever possible. They're not all bad, sometimes you don't have to fight! A few gifts of money or healing gems, and they'll 
            willingly hop into your smart phone as a staunch ally.";
    break;
    case 'Tuesday':
        $image = 'ripper.jpg';
        $content = 'Remember to fuse your demons! This is the easiest way to get more powerful demons, more quickly.';
    break;
}

?>