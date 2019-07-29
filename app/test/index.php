
    <?php
         $randomData = [];

         for ($x = 0; $x <= 10; $x++) {
             $ranNumber = rand( -10 , 50 );
             $theNumberJsonWhatDoTheyMean = [$x , $ranNumber];
             array_push( $randomData, $theNumberJsonWhatDoTheyMean );
         }
 
         echo json_encode($randomData);
    ?>
