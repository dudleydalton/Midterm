<!DOCTYPE html>
<html>
    <head>
        <title>Midterm</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
<body>
<?php
    $servername = "localhost";
    $username = 'siteuser';
    $password = 'mypass';
    $dbname="Olympics";
    
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    } 
    
    //create the query to get the categories
    $query = "SELECT semester FROM course";
    $result = $conn->query($query);
    
    //Create dropdown list
    ?>
    <h2>What would you like to do?</h2>
    <a href="DisplayCountryWinners.php">Display all winners from a country</a>
    <br>
    <a href="DisplayWinnersYear.php">Display all winners in an Olympic Year</a>
    <br>
    <a href="AddCountry.php">Add a new country</a></option>
    <br>
    <a href="AddYear.php">Add a new Olympic year(example: add 2016 in Rio)</a>
    <br>
<?php
$conn->close();
?>
</body>
</html>