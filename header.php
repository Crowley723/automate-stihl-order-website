<?php
session_start();


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script type="text/javascript" src="header.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="sidenav" class="sidenav">

    <?php
        $folderName = basename(dirname($_SERVER['REQUEST_URI']));
        $fileName = basename($_SERVER['REQUEST_URI']);
    ?>

        <div id="dashboard-dropdown" class="dropdown">
            <button onclick="toggleDropdown(this)" ><i class="fa fa-caret-right"></i> Dashboard</button>
            <div class="dropdown-content" id="dashboard-dropdown-content">
                <a href="#/dashboard">Dashboard</a>
                <a href="#/dashboard">Dashboard 2</a>
                <a href="#/dashboard">Dashboard 3</a>
                <a href="#/dashboard">Dashboard 4</a>
            </div>
        </div>
        <div id="reports-dropdown" class="dropdown">
            <button onclick="toggleDropdown(this)" ><i class="fa fa-caret-right"></i> Reports</button>
            <div class="dropdown-content" id="reports-dropdown-content">
                <a href="#/reports/generateOrder.php">Generate Order</a>
                <a href="#/reports/report2.php">Report 2</a>
                <a href="#/reports/report3.php">Report 3</a>
                <a href="#/reports/report4.php">Report 4</a>
            </div>
        </div>
        <div id="inventory-management-dropdown" class="dropdown">
            <button onclick="toggleDropdown(this)" ><i class="fa fa-caret-right"></i> Inventory Management</button>
            <div class="dropdown-content" id="inventory-management-dropdown-content">
                <a href="#/inventory-management/create-item.php">Create Item</a>
                <a href="#/inventory-management/edit-item.php">Edit Item</a>
                <a href="#/inventory-management/remove-item.php">Remove Item</a>
                <a href="#/inventory-management/view-item.php">View Item</a>
            </div>
        </div>
        <div id="admin-dropdown" class="dropdown">
            <button onclick="toggleDropdown(this)"><i class="fa fa-caret-right"></i> Admin</button>
            <div class="dropdown-content" id="admin-dropdown-content">
                <a href="#/admin/users.php">Users</a>
                <a href="#/admin/dashboard.php">Dashboard</a>
                <a href="#/admin/logins.php">Login History</a>
            </div>
        </div>

        
    </div>


</body>

</html>