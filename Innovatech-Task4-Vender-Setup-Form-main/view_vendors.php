<?php
include 'db.php';


$id = $_GET['id'] ?? null;

if ($id === null) {
    die("Invalid vendor ID");
}

$sql = "SELECT * FROM vendors WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Vendor not found");
}

$row = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vendor Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="p-8">
        <h1 class="text-2xl font-bold">Vendor Details</h1>
        <table class="border-collapse border border-gray-400 w-full mt-4">
            <tr><td class="border border-gray-400 p-2 font-semibold">Firm Name</td><td class="border border-gray-400 p-2"> <?= htmlspecialchars($row['Firm']) ?> </td></tr>
            <tr><td class="border border-gray-400 p-2 font-semibold">Owner</td><td class="border border-gray-400 p-2"> <?= htmlspecialchars($row['Owner']) ?> </td></tr>
            <tr><td class="border border-gray-400 p-2 font-semibold">Primary Cell</td><td class="border border-gray-400 p-2"> <?= htmlspecialchars($row['P_CellNo']) ?> </td></tr>
            <tr><td class="border border-gray-400 p-2 font-semibold">Email</td><td class="border border-gray-400 p-2"> <?= htmlspecialchars($row['email']) ?> </td></tr>
            <tr><td class="border border-gray-400 p-2 font-semibold">Debit</td><td class="border border-gray-400 p-2"> <?= htmlspecialchars($row['Debit']) ?> </td></tr>
            <tr><td class="border border-gray-400 p-2 font-semibold">Credit</td><td class="border border-gray-400 p-2"> <?= htmlspecialchars($row['Credit']) ?> </td></tr>
        </table>
        <a href="index.php" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white rounded">Back to List</a>
    </div>
</body>
</html>
