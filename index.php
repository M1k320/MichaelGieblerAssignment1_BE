<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" tyep="text/css" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <?php
    //retrieve first name from url 
    $firstname=filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    //retrieve last name from url
    $lastname=filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    //retrieve age from url
    $age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    //requirement 1: display first and last name
    echo "Hello, my name is $firstname $lastname.<br/>";
    //if the age is greater than or equal to 18 relay that they can vote
    if($age>=18)
    {
    echo "I am $age years old and I am old enough to vote in the United States.<br/>";
    }
    else //if age is not greater or equal to 18 then relay that they cannot vote 
    {
    echo "I am $age years old and I am not old enough to vote in the United States.<br/>";
    }
    //calculate number of days from age
    $numofdays = $age  * 365;
    echo "Number of days from the age is $numofdays <br/>";
    //displays current date
    $date = date('Y-m-d H:i:s');
    echo $date;
    ?>
</body>
</html>