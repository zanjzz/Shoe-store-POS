<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php  include 'head.php'; ?>
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
                        <button class="tab-button main active" data-page="point_of_sale.php">
                            Point of Sale
                        </button>

                        <button class="tab-button" data-page="inventory.php">
                            Inventory
                        </button>

                        <button class="tab-button" data-page="orders.php">
                            Sales
                        </button>

                        <button class="tab-button" data-page="customers.php">
                            Customers
                        </button>
                </div>
                <div id="tab-section-reports">
                    <label>Reports</label>
                         <button class="tab-button" data-page="dashboard.php">
                            Dashboard
                        </button>
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