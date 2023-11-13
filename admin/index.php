<?php
// include "../model/pdo.php";
// include "../model/hotel.php";


include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
       
        // case "listhotel":
        //     $listhotel = loadall_hotel();
        //     include "listhotel.php";
        //     break;

        //     case "hard_delete":
        //         if (isset($_GET['idht'])) {
        //             hard_delete($_GET['idht']);
        //         }
        //         $listhotel = loadall_hotel("",0);
        //         include "listhotel.php";
        //         break;
        //     //  case "updatehotel":
        //     //        if (isset($_GET['idht']) && ($_GET['idht'] > 0)) {
        //     //                         $hotel = loadone_hotel($_GET['idht']);
        //     //                     }
        //     //                     $listhotel = loadall_hotel();
        //     //                     include "listhotel.php";
        //     //                     break;
                                   
      
case "trangchu":
    include "home.php";
    break;

    }
} else {
    include "home.php";
}
