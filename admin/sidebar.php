<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="../assets/images/logo.png" width="120" height="120" alt="Swiss Collection">
        <h5 style="margin-top:10px;">Hello <?php echo $_SESSION['Firstname'] ?></h5>
    </div>

    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="../index.php"><i class="fa fa-home"></i>Dashboard</a>

    <?php if ($_SESSION['Level'] === "1") { ?>
        <a href="../product/view.php" onclick="showProductItems()"><i class="fa fa-th"></i> Products</a>
        <a href="../order/view.php" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a>
    <?php } else { ?>
        <a href="../user/view.php" onclick="showCustomers()"><i class="fa fa-users"></i> Customers</a>
        <a href="../category/view.php" onclick="showCategory()"><i class="fa fa-th-large"></i> Category</a>
        <a href="../product/view.php" onclick="showProductItems()"><i class="fa fa-th"></i> Products</a>
        <a href="../order/view.php" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a>
        <!-- <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> Sizes</a> -->
        <!-- <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Product Sizes</a>     -->
    <?php } ?>


</div>

<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>