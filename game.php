<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}

 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - The Game");
outputBannerNavigation("Game");

?>






<!--- Navigation -->

<!--- End Navigation -->

<div class="container">
    <div class="row justify-content-center text-center mt-5">
        <img class="game-size"src="img/play.gif">
    </div>



    <?php  outputFooter(); ?>





    <!--- Script Source Files -->
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!--- End of Script Source Files -->

    </body>

    </html>