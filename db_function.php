<?php function db_insert($uid,$dist,$time,$count,$road_length,$road_type,$connection){
            
  $query = "INSERT INTO logs(uid, dist, time, count, roadLength,roadType)";
         
         $query .= "VALUES({$uid},'{$dist}','{$time}','{$count}','{$road_length}','{$road_type}') "; 
                
         $create_log_query = mysqli_query($connection, $query);  
}
?>