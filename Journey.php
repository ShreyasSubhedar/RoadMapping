<?php
    class Journey {
        
          protected $total_distance;
          protected $time_taken;
          protected $refuel_count;


        function __construct() {

            $this->total_distance = 0;
            $this->time_taken = 0;
            $this->refuel_count = 0;
            
   
        }

        public function updateTotalDistance($val){
            $this->total_distance = $this->total_distance + $val;

        }
        public function updateTotalTime($val){
            $this->time_taken = $this->time_taken + $val;

        }
        public function updateRefuelCount($val){
            $this->refuel_count = $this->refuel_count + $val ;
        }
        //   protected $start_point = 'GARAGE';
        //   protected $end_point = 'GARAGE';
          

        // This function tells the startpoint of the journey/mapping task 
        //   function get_startPoint(){
        //       return $start_point;
        //   }

        // This function tells the endpoint of the journey/mapping task
        //   function get_endPoint(){
        //     return $end_point;
        //   }




    }
?>