<?php
include 'db.php';

 $Firm = $_POST['Firm'];
 $Owner = $_POST['Owner'];
 $P_CellNo = $_POST['P_CellNo'];
 $S_CellNo = $_POST['S_CellNo'];
 $email = $_POST['email'];
 
 $NTH_NO = $_POST['NTH_NO'];
 $Sales = $_POST['Sales'];
 $Alt = $_POST['Alt'];
 $Discount = $_POST['Discount'];
 $Debit = $_POST['Debit'];
 $Credit = $_POST['Credit'];
 

 




 
$sql = "INSERT INTO vendors(`id`, `Firm`, `Owner`, `P_CellNo`, `S_CellNo`, `email`, `NTH_NO`, `Sales`, `Alt`, `Discount`, `Debit`, `Credit`) 

VALUES (NULL,'$Firm','$Owner','$P_CellNo','$S_CellNo','$email', '$NTH_NO','$Sales','$Alt','$Discount','$Debit','$Credit')"; 



if ($conn->query($sql) === TRUE) {
    header("Location: index.php?success=Vendor added successfully!");
} else {
    echo "Error: " . $conn->error;
}


?>