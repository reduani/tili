<h1>hier komt de homepage van de backend van TiliT oh gelukkig</h1>

<form method="post">
    <input type="hidden" name="logout" value="true">
    <input type="submit" value="logout">
</form>

<?php
    if(!isset($_SESSION['status'])){
        echo 'bestaat niet';
    }else{
        echo $_SESSION['status'];
    }
?>