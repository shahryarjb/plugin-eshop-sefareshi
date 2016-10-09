<?php
function TotalPost($Dest, $source, $BS, $OS, $OGH)
{
    //============================================================ // beyne shahri
    if ($source == $Dest) // beyne shahri
        {
        $out = $BS;
    }
    //============================================================ boroon ostani
    else {
        switch ($Dest) {
            // ------------------------------------------------------------------------------------------------------          
            case "1538": // tehran
                {
                if ($source == 1563 or $source == 1562 or $source == 1539 or $source == 1540 or $source == 1541) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1539": // Qom
                {
                if ($source == 1562 or $source == 1538 or $source == 1540 or $source == 1561) {
                    // code OGHtan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1540": // markazi
                {
                if ($source == 1538 or $source == 1541 or $source == 1548 or $source == 1551 or $source == 1561 or $source == 1539) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1541": // Qazvin
                {
                if ($source == 1542 or $source == 1544 or $source == 1548 or $source == 1540 or $source == 1538 or $source == 1563) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1542": // Gilan
                {
                if ($source == 1543 or $source == 1544 or $source == 1541 or $source == 1563) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1543": // Ardabil
                {
                if ($source == 1545 or $source == 1542 or $source == 1544) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1544": // Zanjan
                {
                if ($source == 1543 or $source == 1545 or $source == 1546 or $source == 1547 or $source == 1548 or $source == 1541 or $source == 1542) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1545": // East Azarbayjan 
                {
                if ($source == 1546 or $source == 1543 or $source == 1544) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1546": // West Azarbayjan
                {
                if ($source == 1545 or $source == 1547 or $source == 1544) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1547": // Kordestan
                {
                if ($source == 1550 or $source == 1548 or $source == 1544 or $source == 1546) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1548": // Hamedan
                {
                if ($source == 1541 or $source == 1544 or $source == 1547 or $source == 1549 or $source == 1551 or $source == 1540) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1549": //  Kermanshah
                {
                if ($source == 1550 or $source == 1551 or $source == 1548 or $source == 1547) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1550": // Ilam
                {
                if ($source == 1552 or $source == 1551 or $source == 1549) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1551": // Lorestan
                {
                if ($source == 1553 or $source == 1552 or $source == 1550 or $source == 1549 or $source == 1540 or $source == 1548 or $source == 1561) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1552": // Khozestan
                {
                if ($source == 1555 or $source == 1554 or $source == 1553 or $source == 1551 or $source == 1550) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1553": // Chahar mahal and Bakhtiari
                {
                if ($source == 1554 or $source == 1552 or $source == 1561 or $source == 1551) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1554": // Koh kiloye and boye ahmad
                {
                if ($source == 1555 or $source == 1556 or $source == 1561 or $source == 1553 or $source == 1552) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1555": // Boshehr
                {
                if ($source == 1557 or $source == 1556 or $source == 1552 or $source == 1554) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1556": // Fars
                {
                if ($source == 1557 or $source == 1555 or $source == 1559 or $source == 1560 or $source == 1561 or $source == 1554) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1557": // Hormozgan
                {
                if ($source == 1558 or $source == 1559 or $source == 1556) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1558": // Sistan and blochestan
                {
                if ($source == 1567 or $source == 1559 or $source == 1557) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1559": // Kerman
                {
                if ($source == 1560 or $source == 1567 or $source == 1558 or $source == 1557 or $source == 1556) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1560": // Yazd
                {
                if ($source == 1565 or $source == 1562 or $source == 1567 or $source == 1561 or $source == 1559 or $source == 1556) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1561": // Esfahan
                {
                if ($source == 1562 or $source == 1560 or $source == 1556 or $source == 1553 or $source == 1554 or $source == 1551 or $source == 1540 or $source == 1539) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1562": // Semnan
                {
                if ($source == 1565 or $source == 1566 or $source == 1564 or $source == 1563 or $source == 1538 or $source == 1539 or $source == 1561 or $source == 1560) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1563": // Mazandaran
                {
                if ($source == 1564 or $source == 1538 or $source == 1562 or $source == 1542 or $source == 1541) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1564": // Golestan
                {
                if ($source == 1565 or $source == 1562 or $source == 1563) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1565": // North Khorasan
                {
                if ($source == 1564 or $source == 1566 or $source == 1562) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1566": // Khorasan Razavi
                {
                if ($source == 1565 or $source == 1562 or $source == 1560 or $source == 1567) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "1567": // Southern khorasan
                {
                if ($source == 1566 or $source == 1560 or $source == 1559 or $source == 1558) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            case "3969": // Alborz 
                {
                if ($source == 1563 or $source == 1538 or $source == 1540 or $source == 1541) {
                    // code ostan hamjavar
                    $out = $OS;
                } else {
                    // code ostan gheire hamjavar
                    $out = $OGH;
                }
                break;
            }
            // ------------------------------------------------------------------------------------------------------          
            default: {
                // code ostan gheire hamjavar
                $out = $OGH;
                break;
            }
        } // end switch
        //===========================================================================
    } // end else
    return $out;
}
?>

