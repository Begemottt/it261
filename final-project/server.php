<?php

session_start();

// Initialize the variables!

$first_name = '';
$last_name ='';
$user_name = '';
$email = '';
$errors = array();
$success = 'You are now logged in!';

// Connect to the database

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Register the user

if(isset($_POST['reg_user'])){
    //Let's receive all the information
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);


    // The array push function will be able to add the exact error that we will be referring to
    if(empty($first_name)){
        array_push($errors, 'First name is required.');
    }
    if(empty($last_name)){
        array_push($errors, 'Last name is required.');
    }
    if(empty($user_name)){
        array_push($errors, 'User name is required.');
    }
    if(empty($email)){
        array_push($errors, 'Email is required.');
    }
    if(empty($password1)){
        array_push($errors, 'Password is required.');
    }
    if($password1 != $password2){
        array_push($errors, 'Passwords do not match!');
    }

    // Check if you are using a repeat username or email

    $user_check_query = "SELECT * FROM users WHERE user_name='$user_name' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['user_name'] == $user_name){
            array_push($errors, 'That username is already in use! Please choose another.');
        }
        if($user['email'] == $email){
            array_push($errors, 'That email is already in use! Please use another.');
        }
    } // End if user

    // If everything is okay - if there are no errors! -  then, we can proceed

    if(count($errors) == 0){
        $password = md5($password1);

        $query = "INSERT INTO users (first_name, last_name, user_name, email, password) VALUES ('$first_name', '$last_name', '$user_name', '$email', '$password' )";
        mysqli_query($db, $query);

        $_SESSION['user_name'] = $user_name;
        $_SESSION['success'] = $success;

        header('Location: login.php');
    } // End if errors

} // isset close

// We will return to the server.php to enter the login information

if(isset($_POST['login_user'])){
    $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($user_name)){
        array_push($errors, 'User name is required.');
    }
    if(empty($password)){
        array_push($errors, 'Password is required.');
    }

    if(count($errors) == 0){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) === 1){
            $_SESSION['user_name'] = $user_name;
            $_session['success'] = $success;

            header('Location: index.php');
        } else {
            array_push($errors, 'Wrong user name/password combination!');
        }
    } // Close count errors

} // isset close