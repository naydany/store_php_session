<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <!--
    Instructions: Use PHP to display only one of the div depending on the value of the boolean !
    -->
    
    <?php
    // A boolean to check if the user is loged in
    $logedIn = false;
    ?>

    <?php 
    if (!$logedIn){
    ?>
    <div>Please log in or sign up to access your account</div> 
    <?php
    }else{
    ?>
    <div>You are loged in ! Now can see your personal sensitive data</div>
    <?php 
    }
    ?>



    

</body>

</html>