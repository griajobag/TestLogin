<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 7/18/2016
 * Time: 8:30 AM
 */

// turn the session on here
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<!-- checking the session is available or not-->
<?php
    if(empty($_SESSION['username'])){
        ?>
        <form method="post" action="Login.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="username" required="required"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="password" required="required"></td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><input type="submit" name="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        <?php
    }else{
        echo "<center>Hi, you! Welcome.</center>";
        echo "<a href='../logouts/Logout.php' style='margin-left: 21px; color: #000000'>Logout</a>";
    }
?>
</body>
</html>