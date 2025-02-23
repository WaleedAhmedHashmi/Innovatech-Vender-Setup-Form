<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Setup Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/343741ebda.js" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="py-[30px] pb-[50px]">
        <header class="flex px-[100px] justify-between items-center pb-[30px] border-b-[1px] border-gray-400">
            <h1 class="font-semibold text-[24px]">Vender Setup Form</h1>
            <div class="flex justify-end items-center gap-[15px]">
                <button type="button" class="bg-blue-400 py-[8px] px-[15px] rounded-[10px] text-white"><a href="/index.html"><i class="fa-solid fa-gauge mr-[5px]"></i>Dashboard</a></button>
                <button type="button" class="bg-blue-400 py-[8px] px-[15px] rounded-[10px] text-white"><a href="#list"><i class="fa-solid fa-list mr-[5px]"></i>Venders List</a></button>
                <label for="Date">Date:</label>
                <input type="date" placeholder="Enter Your Date" class="border-[1px] border-gray-400 py-[8px] px-[15px] rounded-[10px]">
            </div>
        </header>

        <form action='create_vendors.php'  method="post" class="py-[50px] px-[100px] ">
            <fieldset class="border-[1px] border-gray-400 p-[15px] flex justify-start gap-[20px] flex-wrap my-[30px]">
                <legend class="text-[20px] font-semibold text-center">Vender Details</legend>

                <div class="w-[300px]">
                    <label for="Firm Name">Firm Name</label><br>
                    <input type="text" placeholder="Enter Firm Name" name="Firm" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Owner Name">Owner Name</label><br>
                    <input type="text" placeholder="Enter Owner Name" name="Owner" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Primary Cell No:">Primary Cell No:</label><br>
                    <input type="tel" placeholder="000 00000 000" name="P_CellNo" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Secondary Cell No:">Secondary Cell No:</label><br>
                    <input type="tel" placeholder="000 00000 000" name="S_CellNo"  class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Email">Email</label><br>
                    <input type="email" placeholder="Enter Email Address" name="email" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Regitser Tax">Register Tax</label><br>
                    <select name="register"  class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="w-[300px]">
                    <label for="NTN No:">NTN No:</label><br>
                    <input type="number" placeholder="Enter NTN No: " name="NTH_NO" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Sales Tax No:">Sales Tax No:</label><br>
                    <input type="number" placeholder="Enter Sales Tax No:" name="Sales" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Alt %">Alt %</label><br>
                    <input type="number" placeholder="0.00" name="Alt" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Discount %">Discount %</label><br>
                    <input type="number" placeholder="0.00" name="Discount" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                

                <div class="w-[300px]">
                    <label for="Debit">Debit</label><br>
                    <input type="number" placeholder="Enter Debit" name="Debit" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>

                <div class="w-[300px]">
                    <label for="Credit">Credit</label><br>
                    <input type="number" placeholder="Enter Credit" name="Credit" class="border-gray-400 border-[1px] px-[5px] w-[300px] h-[35px] mt-[5px] rounded-[5px]" >
                </div>
            </fieldset>

            <button type="submit" class="bg-blue-500 px-[15px] py-[10px] rounded-[10px] float-right mb-[20px] font-semibold text-white"><i class="fa-solid fa-floppy-disk mr-[5px]"></i> Save</button>

              
        </form>

        
           
        </div>
    </div>

<script>
    function confirmDelete(){
        return confirm('Are you sure you want to delete this vendor?');
    }

</script>

</body>
</html>

<?php
include 'db.php';

$sql = "SELECT * FROM vendors";

$result = $conn->query($sql);



?>

<div class="px-[100px]">
            <h1 class="font-semibold text-[24px]">Venders List</h1> 
            <table id="list" class="w-full">
                <thead class="">
                    <tr>
                        <th>Firm Name</th>
                        <th>Address</th>
                        <th>Primary Cell</th>
                        <th>Email</th>
                        <th>Debit </th>
                        <th>Credit </th>
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>   
                <tr id="table1">
                        <td><?= $row['Firm']; ?></td>
                        <td><?= $row['Owner'];   ?></td>
                        <td><?= $row['P_CellNo']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['Debit']; ?></td>
                        <td><?= $row['Credit']; ?></td>
                        <td class="flex justify-center items-center gap-[10px]">
                        <a href="view_vendors.php?id=<?= $row['id']; ?>" class="bg-blue-400 text-white px-[5px]">
                        <i class="fa-solid fa-eye "></i></a>
                        <a href="edit_vendors.php?id=<?= $row['id']; ?>" class="bg-blue-600 text-white px-[5px]">
                        <i class="fa-solid fa-pen-to-square "></i></a>
                    
                        <a href="delete_vendors.php?id=<?= $row['id']; ?>" class=" bg-red-600 text-white px-[5px]" onclick="return confirm('Are you sure you want to delete this vendor?')">
                        <i class="fa-solid fa-trash "></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
           </table>





