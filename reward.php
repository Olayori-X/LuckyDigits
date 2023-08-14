<?php
    include "connect.php";
    include "validate.php";

    if(isset($_POST['ID'])){
        $ID = validate($_POST['ID']);

        $checkID = "SELECT * FROM ID WHERE ID = '$ID' ";
        $IDquery = mysqli_query($connect, $checkID);

        if(mysqli_num_rows($IDquery) === 1){
            header("Location :  claimreward.php?message=You are the winner of this reward");
        }
        elseif(mysqli_num_rows($IDquery) > 1){
            $winnerID = [];
            while($row = mysqli_fetch_array($IDquery)){
                $winnerID[] = $row['ID'];
            }
            $number_of_winners = count($winnerID) - 1;
            header("Location : claimreward.php?message=You and $number_of_winners won this reward");
        }

        else{
            header("Location : claimreward.php?message= You did not win this reward");
        }
    }
?>