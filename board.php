<?php
session_start();

 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - Leaderboard");
outputBannerNavigation("Leaderboard");

?>






<!--- Navigation -->

<!--- End Navigation -->

<div class="container">
    <h2>Contextual Classes</h2>
    <p>Please see our highest Scorers !!</p>
    <table class="table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Firstname</th>
                <th>Score</th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sonny</td>
                <td>253</td>
            </tr>
            <tr class="success">
                <td>2</td>
                <td>Doe</td>
                <td>230</td>
            </tr>
            <tr class="danger">
                <td>3</td>
                <td>Moe</td>
                <td>225</td>
            </tr>
            <tr class="info">
                <td>4</td>
                <td>Dooley</td>
                <td>215</td>
            </tr>
            <tr class="warning">
                <td>5</td>
                <td>Refs</td>
                <td>200</td>
            </tr>
            <tr class="active">
                <td>6</td>
                <td>Activeson</td>
                <td>140</td>
            </tr>
        </tbody>
    </table>
</div>

<?php  outputFooter(); ?>






<!--- Script Source Files -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>

</html>