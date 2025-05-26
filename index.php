
<?php
    // get and post Requests

    // var_dump($_GET);

    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
        $name =  $_GET['name'];
        $email =  $_GET['email'];
        $password =  $_GET['password'];

        echo "<h1>Submitted Successfully</h1>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<!-- variables -->
<?php
$name = "john";
$year_of_birth = 2002;
$age = 0;
?>

<!-- data structure -->
<?php
// array has index start with 0
$subjects = ['Math', 'Physics', 'Chemistry', 'Biology'];
// associative array has key and value
$resurts = [
    'Math' => '50',
    'Physics' => '70',
    'Chemistry' => '65',
    'Biology' => '80',
];
?>

<!-- operations -->
<?php
$age = 2025 - $year_of_birth;
$difference = 10;
$age -= 5;
?>


<?php
// echo "My name is " . $name . " and I am " . $age . " years old.";
// echo "<br>";
// echo $name . " Likes " . $subjects[0] . " and he got " . $resurts[$subjects[0]] . " on " . $subjects[0];
// echo "<br>";
// echo $name . " Has " . $age . " years old.";
// echo "<br>";
?>

<!-- conditions -->
<?php
// if ($age > 18) {
//     echo "You are eligible to vote";
// } 
// elseif($age == 18) {
//     echo "You are good to vote";
// }
// else {
//     echo "You are not eligible to vote";
// }
?>

<!-- loops -->
<?php
// for loop

// echo "<br>";
// for($i = 0; $i < 4; $i++) {
//     echo $subjects[$i] . " = " . $resurts[$subjects[$i]];
//     echo "<br>";
// }

// echo "<br>";
// for($i = 0; $i < count($subjects); $i++) {
//     echo $subjects[$i];
//     echo "<br>";
// }


//foreach loop

// echo "<br>";
// foreach($resurts as $subject => $result) {
//     echo $subject . " = " . $result;
//     echo "<br>";
// }
// //while loop

// echo "<br>";
// $i = 0;
// while($i < count($subjects)) {
//     echo $subjects[$i];
//     echo "<br>";
//     $i++;
// }

// //do while loop

// echo "<br>";
// $i = 0;
// do {
//     echo $subjects[$i];
//     echo "<br>";
//     $i++;
// } while($i < count($subjects));
?>