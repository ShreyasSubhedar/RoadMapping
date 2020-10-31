<?php
    public class Journey {
        
          protected $total_distance;
          protected $time_taken;
          protected $start_point = 'GARAGE';
          protected $end_point = 'GARAGE';
          


          function get_startPoint(){
              return $start_point;
          }

          function get_endPoint(){
            return $end_point;
          }
    }
?>