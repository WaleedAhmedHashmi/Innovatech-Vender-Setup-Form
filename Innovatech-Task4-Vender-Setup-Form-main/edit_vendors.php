<?php
include 'db.php';


$id = $_GET['id'] ?? null;

if ($id === null) {
    die("Invalid vendor ID");
}


$sql = "SELECT * FROM vendors WHERE id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("Vendor not found");
}

$row = $result->fetch_assoc();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Firm = $_POST['Firm'] ?? '';
    $Owner = $_POST['Owner'] ?? '';
    $P_CellNo = $_POST['P_CellNo'] ?? '';
    $email = $_POST['email'] ?? '';
    $Debit = $_POST['Debit'] ?? '';
    $Credit = $_POST['Credit'] ?? '';

     {
      
        $update_sql = "UPDATE vendors SET 
                        Firm = '$Firm', 
                        Owner = '$Owner', 
                        P_CellNo = '$P_CellNo', 
                        email = '$email', 
                        Debit = '$Debit', 
                        Credit = '$Credit' 
                      WHERE id = $id";

        if ($conn->query($update_sql) === TRUE) {
            echo "Record updated successfully!";
            header("Location: index.php"); 
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>

<form action="" method="POST">
    <label>Firm Name:</label>
    <input type="text" name="Firm" value="<?= htmlspecialchars($row['Firm']); ?>" required>
    
    <label>Owner:</label>
    <input type="text" name="Owner" value="<?= htmlspecialchars($row['Owner']); ?>" required>
    
    <label>Primary Cell:</label>
    <input type="tel" name="P_CellNo" value="<?= htmlspecialchars($row['P_CellNo']); ?>" required>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($row['email']); ?>" required>
    
    <label>Debit:</label>
    <input type="number" name="Debit" value="<?= htmlspecialchars($row['Debit']); ?>">
    
    <label>Credit:</label>
    <input type="number" name="Credit" value="<?= htmlspecialchars($row['Credit']); ?>">
    
    <button type="submit">Update Vendor</button>
</form>
