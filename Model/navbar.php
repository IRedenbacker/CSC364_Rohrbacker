<?php include $_SERVER['DOCUMENT_ROOT'] . '/Control/application_includes.php';?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Isaiah Sells Things</title>

        <meta name="viewport" content="width=device-width">
        <script src="modernizr.custom.40753.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link rel="stylesheet" href="/../Model/Styles/navbarStyles.css">
        <link rel="stylesheet" href="/../Model/Styles/mediaQuery.css">
        <link rel="stylesheet" href="/../Model/Styles/body.css">
        <link rel="icon" sizes="192x192" href="/../Namespace/logo.png">
    </head>
    <body>
        <div class="container">
            <a id="basicNav" href="index.php">Home</a>
            <nav class="sitenavigation">
                <ul>
                    <li style="margin: 0em 0em 0em 4em; border-left: 1px solid #bbb" class="dropdown">
                        <a href="/View/top.php" class="dropbtn">Products</a>
                        <div class="dropdown-content">
                          <a href="/View/addProducts.php">Add Products</a>
                          <a href="/View/viewProducts.php">View Products</a>
                        </div>
                    </li>
                    <?php if (isset($_SESSION['username'])):?>
                      <li class="dropdown">
                        <a href="viewAccount.php"><?php echo $_SESSION['username']; ?></a>
                        <div class="dropdown-content">
                          <a href="/View/viewCart.php">View Cart</a>
                          <a href="/View/logout.php">Logout</a>
                        </div>
                      </li>
                    <?php endif; ?>
                    <li style="float: right; padding: 0em 4em 0em 0em;" class="dropdown">
                        <a href="/View/index.php" class="dropbtn">Home</a>
                        <div class="dropdown-content">
                          <a href="/View/register.php">Register</a>
                          <a href="/View/login.php">Log In</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <script src="../Control/script.js"></script>
    </body>
</html>
