<?php
//==================================================================function  post cost
//----------------------------------- beyne shahri
function PostCostBS($wc, $S250, $S500, $S1000, $S2000,$SPLUS)
{
    
    switch ($wc) {
        case $wc <= 250: {
            $weightPrice = $S250;
            break;
        }
        case $wc > 250 && $wc <= 500: {
            $weightPrice = $S500;
            
            break;
        }
        case $wc > 500 && $wc <= 1000: {
            $weightPrice = $S1000;
           
            break;
        }
        case $wc > 1001 && $wc <= 2000: {
            $weightPrice = $S2000;
            
            break;
        }
        default:
          {
		    $weightPrice = $S2000;  // calculate 2 kilo
            $wc= $wc - 2000; // calculate vazn mazad
            $wc = (($wc / 1000) * $SPLUS) ;
            $weightPrice =  $weightPrice + $wc;
            break;
           } 
           
    }
    return $weightPrice;
}
//----------------------------------- beyne shahri
//----------------------------------- ostani hamjavar
function PostCostOS($wc, $S250, $S500, $S1000, $S2000,$SPLUS)
{
    switch ($wc) {
        case $wc <= 250: {
            $weightPrice = $S250;
           
            break;
        }
        case $wc > 250 && $wc <= 500: {
            $weightPrice = $S500;
          
            break;
        }
        case $wc > 500 && $wc <= 1000: {
            $weightPrice = $S1000;
           
            break;
        }
        case $wc > 1001 && $wc <= 2000: {
            $weightPrice = $S2000;
            
            break;
        }
        default:
            {
            
             $weightPrice = $S2000;  // calculate 2 kilo
            $wc= $wc - 2000; // calculate vazn mazad
             $wc = (($wc / 1000) * $SPLUS) ;
            $weightPrice =  $weightPrice + $wc;
            break;
           } 
    }
    return $weightPrice;
}
//----------------------------------- ostani hamjavar
function PostCostOGH($wc, $S250, $S500, $S1000, $S2000,$SPLUS)
{
    
    switch ($wc) {
        case $wc <= 250: {
            $weightPrice = $S250;
            
            break;
        }
        case $wc > 250 && $wc <= 500: {
            $weightPrice = $S500;
          
            break;
        }
        case $wc > 500 && $wc <= 1000: {
            $weightPrice = $S1000;
           
            break;
        }
        case $wc > 1001 && $wc <= 2000: {
            $weightPrice = $S2000;
           
            break;
        }
        default:
          {
          
            $weightPrice = $S2000;  // calculate 2 kilo
            $wc= $wc - 2000; // calculate vazn mazad
            $wc = (($wc / 1000) * $SPLUS) ; 
            $weightPrice =  $weightPrice + $wc;
            break;
           } 
    }
    
    return $weightPrice;
}

//----------------------------------- ostani gheire hamjavar
//==================================================================function  post cost
?>


