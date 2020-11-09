<?php
// Delcare regular variables
$first_name = '';
$last_name = '';
$email = '';
// $phone = '';
$gender = '';
$wines = '';
$comments = '';
$privacy = '';
// Declare error variables
$first_name_error = '';
$last_name_error = '';
$email_error = '';
// $phone_error = '';
$gender_error = '';
$wines_error = '';
$comments_error = '';
$privacy_error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // We need to declare our errors, i.e if a field is empty, do something - more or less, we are going to declare a whole bunch of if statements and after-
    // wards, if all the if statements are true, then yippy and skippy!

    if(empty($_POST['first_name'])){
        $first_name_error = 'Please fill in your first name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])){
        $last_name_error = 'Please fill in your last name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])){
        $email_error = 'Please fill in your email.';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])){
        $gender_error = 'Please select one.';
    } else {
        $gender = $_POST['gender'];
    }

    if( $gender = 'male'){
        $male = 'checked';
    } elseif($gender = 'female'){
        $female = 'checked';
    } elseif($gender = 'nonbinary'){
        $nonbinary = 'checked';
    } elseif($gender = 'none'){
        $none = 'checked';
    }

    if(empty($_POST['wines'])){
        $wines_error = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if(empty($_POST['comments'])){
        $comments_error = 'Please write a comment!.';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])){
        $privacy_error = 'Please agree to our Privacy Rules!!';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(isset($_POST['first_name'],
    $_POST['last_name'], 
    $_POST['gender'], 
    $_POST['wines'], 
    $_POST['comments'], 
    $_POST['privacy']
    )){
        $to = 'poliosis@gmail.com';
        $subject = 'Test Email'.date('m/d/y');
        $body = ''.$first_name.' has filled out your form!'.PHP_EOL.'';
        $body .= 'Email: '.$email.PHP_EOL.'';
        $body .= 'Gender: '.$gender.PHP_EOL.'';
        $body .= 'Comments: '.$comments.PHP_EOL.'';

        $headers = array(
            'From' => 'no-reply@rtvgilder.com',
            'Reply-to' => $email

        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');

    } // End isset

} // close server
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Emailable Form</title>

    <style>
        form{
            width: 350px;
            margin: 0 auto;
        }
        input[type=text], input[type=email], textarea{
            width: 100%;
            height: 30px;
        }
        textarea{
            height: 120px;
            margin-bottom: 20px;
        }
        fieldset{
            color: #666;
            padding: 10px, 15px, 10px, 10px;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        input{
            margin-bottom: 10px;
        }
        ul{
            list-style: none;
        }
        .box{
            width: 600px;
            margin: 20px auto;
            background: beige;
            padding: 20px;
            border: 1px solid green;
        }
        select {
            margin-bottom: 10px;
        }
        span{
            display: block;
            color: red;
            font-style: italic;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>

        <label>First Name</label>
        <input type="text" name="first_name" value='<?php if (isset($_POST['first_name'])){echo $_POST['first_name'];}?>'>
        <span><?php echo htmlspecialchars($first_name_error); ?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value='<?php if (isset($_POST['last_name'])){echo $_POST['last_name'];}?>'>
        <span><?php echo htmlspecialchars($last_name_error); ?></span>

        <label>Email</label>
        <input type="email" name="email" value='<?php if (isset($_POST['email'])){echo $_POST['email'];}?>'>
        <span><?php echo htmlspecialchars($email_error); ?></span>

        <label>Select your gender</label>
        <ul>
            <li><input type="radio" name="gender" value="male"
                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male'){echo 'checked = checked';} ?>
            >Male</li>
            <li><input type="radio" name="gender" value="female"
                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female'){echo 'checked = checked';} ?>
            >Female</li>
            <li><input type="radio" name="gender" value="non-binary"
                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'non-binary'){echo 'checked = checked';} ?>
            >Non-binary</li>
            <li><input type="radio" name="gender" value="none"
                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'none'){echo 'checked = checked';} ?>
            >None</li>
        </ul>
        <span><?php echo htmlspecialchars($gender_error); ?></span>

        <label>Favorite Wines</label>
        <ul>
        <!-- Radio boxes and checkboxes are very similar! -->
            <li><input type="checkbox" name="wines[]" value="Cabernet"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Cabernet'){echo 'checked = checked';} ?>
            >Cabernet</li>
            <li><input type="checkbox" name="wines[]" value="Merlot"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Merlot'){echo 'checked = checked';} ?>
            >Merlot</li>
            <li><input type="checkbox" name="wines[]" value="Syrah"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Syrah'){echo 'checked = checked';} ?>
            >Syrah</li>
            <li><input type="checkbox" name="wines[]" value="Malbec"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Malbec'){echo 'checked = checked';} ?>
            >Malbec</li>
            <li><input type="checkbox" name="wines[]" value="Zinfandel"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Zinfandel'){echo 'checked = checked';} ?>
            >Zinfandel</li>
            
        </ul>
        <span><?php echo htmlspecialchars($wines_error); ?></span>

        <label>Comments</label>
        <textarea name="comments"><?php if (isset($_POST['comments'])){echo htmlspecialchars( $_POST['comments'] ) ;}?></textarea>
        <span><?php echo htmlspecialchars($comments_error); ?></span>

        <input type="radio" name="privacy" value = "
        <?php if (isset($_POST['privacy'])){ echo htmlspecialchars($_POST['privacy']); } ?>"
        >I agree to the Privacy Policy
        <span><?php echo htmlspecialchars($privacy_error); ?></span>

        <input type="submit" value="Send it!!">
        <p><a href="">Reset me!</a></p>
    </fieldset>

    </form>
</body>
</html>