<?php



require_once('Classes.php');
require_once('db_function.php');
class Car{

    private $regNum;
    private $carName;
    private $licenseNum;
    private $mappingStatus;
    private $fuelStatus = array('Full' => 0, 'Medium' => 0, 'Low' => 0, 'Empty' => 0);
}
if(isset($_POST['submit']) && $_POST['roadType']){

    $road_type = $_POST['roadType'];
    $road_length = $_POST['roadLength'];
    $rm = new RoadMap();
    $js=$rm->mapRoad($road_type,$road_length);
   

        $time  = $js->getTime();
        $count= $js->getCount();
        $dist = $js->getDist();
        $uid= time();
    db_insert($uid, $dist, $time, $count, $road_length, $road_type,$connection);
    

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
                    <h3 class="display-4">Road Mapping using Autonomous Car</h3>
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
                            <input class="form-check-input" type="radio" name="roadType" id="Urban" value="Urban">
                            <label class="form-check-label" for="Urban">Urban</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roadType" id="Rural" value="Rural">
                            <label class="form-check-label" for="Rural">Rural</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Initiate Mapping</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL DISTANCE TRAVELLED</h5>
                        <p id="dt"class="card-text"><?php echo $js->getDist() ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL TIME TAKEN</h5>
                            <p id="dt"class="card-text"><?php echo $js->getTime() ?></p>
                        </div>
                </div>
            </div>
            <div class="col-sm">
                    <div class="col-sm">
                        <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">REFUEL COUNT</h5>
                                    <p id="rc"class="card-text"><?php echo $js->getCount()?></p>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by uid.." title="Type in a unique id">
        <div  class='table-wrapper-scroll-y my-custom-scrollbar'>
            <table id="myTable" class='table table-bordered table-striped mb-0'>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">UID</th>
                    <th scope="col">Distance</th>
                    <th scope="col">Time</th>
                    <th scope="col">Refuel Count</th>
                    <th scope="col">Road Length</th>
                    <th scope="col">Road Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query="select * from logs order by uid desc";
                    $result=mysqli_query($connection,$query);
                    $row_no =1;
                    
                    
                    while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<th scope='row' >{$row_no}</td>";
                    echo "<td>{$row['uid']}</td>";
                    echo "<td>{$row['dist']}</td>";
                    echo "<td>{$row['time']}</td>";
                    echo "<td>{$row['count']}</td>";
                    echo "<td>{$row['roadLength']}</td>";
                    echo "<td>{$row['roadType']}</td>";
                    echo "</tr>";
                    $row_no = $row_no+1;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
   


</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>