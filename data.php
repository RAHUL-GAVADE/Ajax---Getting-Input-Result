<?php
    
     $names[] = 'Rahul';
     $names[] = 'Sandip';
     $names[] = 'Swapanil';
     $names[] = 'Rushikesh';
     $names[] = 'Piyu';
     $names[] = 'Shridhar';
            
             
      foreach ($names as $name ) {
        
           if ($_REQUEST['var1'] == $name) {
                  //echo "The File Result is:$_REQUEST[var1]";
                  echo "<div style='color:green'>$_REQUEST[var1] is a veriable</div>";   
             }


            
      }

        // echo $_REQUEST['var1'];
?>