
<div class="header">

    <div class="container">

        <div class="logo">
            <h1><a href="index.php"><b>T<br>H<br>E</b>Leaf Now<br /><span> Best Nursary</span></a></h1>
        </div>

        <?php
        if (isset($_COOKIE['HI'])) {

        ?>
            <div class="header">
                <b>Welcome </b><b style="color: green;"><?php echo $namess; ?></b>
            </div>

            <div class="head-t">
                <ul class="card">
                    <li><a href="order.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Orders</a></li>
                    <li><a href="about.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>About Us</a></li>
                    <li><a href="shipping.php"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
                    <li><a href="cust-logout.php"><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
                </ul>
            </div>

        <?php
        }

        ?>

       

        <?php include_once("top.php"); ?>

    </div>
</div>

<!-- <div data-vide-bg="video/video">
    <div class="container">
        <div class="banner-info">
           
            <div class="search-form">
                <form action="index-search.php" method="post">
                    <input type="text" placeholder="Search for over 5,000 products, categories & brands" name="search">
                    <input type="submit" value=" ">
                </form>
            </div>
        </div>
    </div>
</div> -->