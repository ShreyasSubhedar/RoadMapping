<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Mapping Task</title>
    <link rel="stylesheet" href="main.css" />
</head>

<body>

<?php
$road_length="";
$road_type="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $road_length = $_POST["roadlength"];
  $road_type = $_POST["roadtype"];
}

?>
    <div class="app-wrap">
            <br>
            <h2>Enter the details :</h2>
            <br>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Speed in Kms : <input type="text" name="roadlength">
            <br><br>
            Road Type :
            <input type="radio" name="roadtype" value="urban">Urban
            <input type="radio" name="roadtype" value="rural">Rural
            <br><br>
            <input type="submit" name="submit" value="Submit">  
            </form>
        
    </div>
</body>

</html>