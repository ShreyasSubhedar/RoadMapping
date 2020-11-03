
<?php
$road_length="";
$road_type="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $road_length = $_POST["roadlength"];
  $road_type = $_POST["roadType"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Mapping Task</title>
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="jumbotron">
                    <h1 class="display-4">Road Mapping using Autonomous Car</h1>
                </div>
            </div>
        </div>
        <div class="row" id="formDiv">
            <div class="col-sm">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="roadLength">ROAD LENGTH</label>
                        <input type="number" class="form-control" name="roadLength" placeholder="Enter road Length in kilometers" min=0 max=10000 required>
                    </div>
                    <label for="roadLength">ROAD TYPE</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roadType" id="Urban" value="urban">
                            <label class="form-check-label" for="Urban">Urban</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roadType" id="Rural" value="rural">
                            <label class="form-check-label" for="Rural">Rural</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Initiate Mapping</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>



