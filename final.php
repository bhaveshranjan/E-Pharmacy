<?php
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div>
        <h1 style="text-align: center; font-family: 'Fredoka One', cursive;">WE'VE RECEIVED YOUR ORDER!</h1>
        <h5 style="text-align: center; font-family: 'Fredoka One', cursive;">Thanks for shopping with E-Pharmacy!
           <br> you can check you order details in orders section</h5>
        <img src="images/final.gif" alt="" style="width:30rem; margin-left: 400px;">
    </div>
    <a href="index.php"> <button style="margin-left: 530px; margin-top: -35px;" type="button" class="btn btn-outline-info btn-lg">Go back to the store </button></a>
    <?php
    add_order();
    ?>
    <br>
    <!-- FOOTER -->
    <?php
    include "includes/footer.php"
    ?>

</body>