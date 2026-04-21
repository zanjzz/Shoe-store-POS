<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link href="components.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <main>
        <!-- Tab Section -->
        <section id="tab-section">
            
            <div id="tab-section-top">
                <img src="assets/zic-logo.png" alt="ZIC Shoes Logo" id="logo">

            </div>
            <div id="tab-section-middle">
                <div id="tab-section-main">
                    <label>Main</label>
                    <button class="tab-button" onclick="loadTab('point_of_sale.php')">Point of Sale</button>
                    <button class="tab-button" onclick="loadTab('inventory.php')">Inventory</button>
                    <button class="tab-button" onclick="loadTab('orders.php')">Sales</button>
                    <button class="tab-button" onclick="loadTab('customers.php')">Customers</button>
                </div>
                <div id="tab-section-reports">
                    <label>Reports</label>
                    <button class="tab-button" onclick="loadTab('dashboard.php')">Dashboard</button>
            
                </div>
            </div>

            <div id="tab-section-bottom">
                <label id="logout">Log out</label>
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
        </section>


        <!-- Content Section -->
        <section id="content-section">
            <!-- injected content goes here -->
        </section>

        <!-- Cart Section -->
        <section id="cart-section">

            <!-- Top part of this section -->
            <div id="cart-section-top">
                <i class="fa-solid fa-user"></i>
                <label id="user-label">Current User</label>
                <button id="select-user">Select User</button>
            </div>

            <!-- Bottom part of this section -->
            <div id="cart-section-bottom">

            </div>

        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>