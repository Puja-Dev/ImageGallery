<html>
<head>
</head>
<body><form name=""form" method="post">


            

            <input type="submit" name="logout" value="Logout" />



</form>


</body>
</html>
<?php
        
        session_start();
        if(isset($_SESSION['Name']))
        {
        echo "Welcome".$_SESSION['abc'].$_SESSION['xyz']."<br />";
        echo "Your Mail ID is".$_SESSION['EMail']."<br />";
        echo "Session ID is".session_id()."<br />";
        }else
            
            header("location:login.php");
        
        if(isset($_POST['logout']))
        
        {
            session_destroy();
            header("location:login.php");               //session destroy
        }
        
?>