<html>
<head>
<style type="text/css">
h3{
  text-decoration:underline;
  font-style:italic;
  }
p{
 font-weight:bold;
 font-size:20px;
 }
</style>
<link rel="stylesheet" type="text/css" href="external.css"/>
<title>Image Gallery</title>

            
</head>
<body>
	
    
    <header id="header">
		
        <div class="header">
		<h2><font face=jokerman>~IMAGE~GALLERY~</font></h2>
        <br /><br />
		</div>
        
	</header>
	
    
    <nav id="down">
		<table border="double" bgcolor=black width=100%>
			<tr>
				<td align=center><a href="homepage.php" title="Home PAGE">HOME</a></td>
				<td align=center><a href="aboutus.php"  title="About Us">About Us</a></td>
				<td align=center><a href="contactus.php">Contact Us</a></td>
				<td align=center><a href="signup.php" title="SIGN UP">SIGN UP</a></td>
				<td align=center><a href="login.php" title="Log In">LOG IN</a></td>
			</tr>
		</table> 
	</nav>
    
    
	<div id="left">
		
        <hr /> WHAT's NEW<hr />
        <br /><a href="nature.php"> &nbsp Nature Wallpapers</a><br /><hr />
        <br /><a href="flowers.php">&nbsp Flowers </a><hr />
        <br /><a href="superheroes.php">&nbsp Super Heroes</a><hr />
        <br /><a href="viratkohli.php">&nbsp Virat Kohli </a><hr />
        <br /><a href="sevenwonders.php">&nbsp Seven Wonders</a><hr />
        
	</div>

	<main>
		  
        <hr color=white size=20/>
        
        <h1><b><font color=red><center>The Image Gallery</center></font></b></h1>
        
        <table align=center border=5><tr><td><h3><b>~IMAGE~GALLERY~</b></h3></td></tr></table>
        
        <hr color=white size=20/>
        <br /><br /><br />

        <form name="frm" action="logedin.php" method="POST">


<fieldset>
        <legend align=center><strong><h2>LOGIN</h2></strong></legend>
<br /><br />

<div id="login">
<table class="table">
<table width="50%" align="center" border="2">
<tr><td>Email :</td><td><input type="email" name="mail" placeholder="amit@gmail.com"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
<tr><td colspan="2"><input type="checkbox" name="checkbox" /> Remember me</td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Login" id="login"/></td></tr>
  
  </form>
  
  </table>
  <br /><br />

  </div>

</fieldset>

         
         
         <br /><br /><br />
         
         
 
                        
                         <hr />
                         <center> <a href=homepage.php title=Home Page>Home</a>&nbsp&nbsp&nbsp
                          <a href=contactus.php title=Contact Us>Contact Us</a>&nbsp&nbsp&nbsp
                          <a href=aboutus.php title=About Us>About Us</a> 
                          <br />           
                          <br/>COPYRIGHTS &copy 2016 (~IMAGE~GALLERY~). ALL RIGHTS RESERVED.
                          <br /><br />
                          <b><font color=#6D8484>DEVELOPED BY :</font> <font color=#031211><marquee behavior=right onmouseover=stop() onmouseout=start()> Pooja Devlal, Lalit Punera, Prachi Sharma, Prakriti Bawa</marquee> </font></b></center>
                          
                          
        
 
         
                
	</main>	
    
    	
</body>
</html>



<?php            
            
           session_start(); 
            if(isset($_POST['submit']))
            
            {
                
                            if(!empty($_POST['mail']) and !empty($_POST['pwd']))
                            {
                                
                                
                                
                                $link=mysqli_connect("localhost","root","","media");
                                $qry="select * from account where U_email='$_POST[mail]' and U_Password='$_POST[pwd]'";
                                
                                $resultset=mysqli_query($link,$qry);
                                
                                
                                while($res=mysqli_fetch_row($resultset))
                                {
                                
                                        //echo "welcome".$uemail;
                                        
                                        $_SESSION['abc']=$res[0];
                                        $_SESSION['xyz']=$res[1];
                                        $_SESSION['mail']=$res[3];
                                        header("location:logedin");
                            
                                        
                                    
                                }
                            
                            
                            }
                            
                            
                                
            }
            else
            {
                echo "fill values to start a session";
            }
                
                
?>