<!DOCTYPE html>
<html>
    <head>
        <title>Midterm</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
<body>
    <h2>Here is a list of winners</h2>
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
    
        //retrieve all 
        $query = "SELECT * FROM winners";
        $winners = $conn->query($query);
    ?>
    
    <?php
    while($row = $winners->fetch_assoc()) {
        echo $row["FirstName"];
        echo $row["LastName"];
        echo $row["YearID"];
        echo $row["County"];
    }
    
    ?>
    
</body>

</html>