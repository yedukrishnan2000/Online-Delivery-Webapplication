<?php include 'conn.php';
extract($_GET);
 ?>
<!--  <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<a href="adminhome.php">Home</a>
		<a href="admin_manage_distributor.php">Manage Distributors</a>
		<a href="admin_add_category.php">Add Category</a>
		<a href="admin_add_distribution_area.php">Add Distribution Area</a>
		<a href="admin_manage_different_subscription_Plans.php">Manage Different Subscription Plans</a>
        <a href="admin_view_customer_details.php">View Customer Details</a>
        <a href="admin_view_sales.php">View Sales</a>
        <a href="admin_view_complaints.php">View Complaints</a>
		<a href="index.php">Logout</a> -->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Online Delivery of Diary Products</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/templatemo-breezed.css">

    <link rel="stylesheet" href="css/owl-carousel.css">

    <link rel="stylesheet" href="css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                       <!--  <a href="index.html" class="logo">
                            .BREEZED
                        </a> -->
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="adminhome.php">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Manage</a>
                                <ul>
                                    <li><a href="admin_manage_distributor.php">Distributors</a></li>
                                    <li><a href="admin_manage_products.php">Products</a></li>
                                    <li><a href="admin_manage_different_subscription_Plans.php">Subscription Plans</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="javascript:;">Add</a>
                                <ul>
                                    <li><a href="admin_add_category.php">Category</a></li>
                                    <li><a href="admin_add_distribution_area.php"> Distribution Area</a></li>
                                </ul>
                            </li>


                             <li class="submenu">
                                <a href="javascript:;">View</a>
                                <ul>
                                    <li> <a href="admin_view_customer_details.php"> Customer Details</a></li>
                                    <li> <a href="admin_view_sales.php">Sales</a></li>
                                    <li> <a href="admin_view_complaints.php">Complaints</a></li>
                                </ul>
                            </li>


                            <li class="scroll-to-section"><a href="index.php">Logout</a></li> 
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

   
	