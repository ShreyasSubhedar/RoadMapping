<?php
    public class Journey {
        
          protected $total_distance;
          protected $time_taken;
          protected $start_point = 'GARAGE';
          protected $end_point = 'GARAGE';
          

          // This function tells the startpoint of the journey/mapping task 
          function get_startPoint(){
              return $start_point;
          }

          // This function tells the endpoint of the journey/mapping task
          function get_endPoint(){
            return $end_point;
          }
    }
?>