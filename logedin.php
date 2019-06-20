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
<form name="frm" action="login.php" method="post">
	
    
    <header id="header">
		
        <div class="header">
		<h2><font face=jokerman>~IMAGE~GALLERY~</font></h2>
        <br /><br />
		</div>
        
	</header>
	
    
    <nav id="down">
		<table border="double" bgcolor=black width=100%>
			<tr>
				<td align=left><input type="submit" value="LOGOUT" name="logout" width="60px" height="40px"/></td>
			</tr>
		</table> 
	</nav>
 
		
        
        </form>
	
    <main>
		  
        <hr color=white size=20/>
        
        <h1><b><font color=red><center>The Image Gallery</center></font></b></h1>
        
        <table align=center border=5><tr><td><h3><b>~IMAGE~GALLERY~</b></h3></td></tr></table>
        
        <hr color=white size=20/>
        
        <br /><br /><br />
        
        
        <p><h2>Welcome to Image~Gallery !!
                </h2><br />
                
                You can now Access our additional services in which we will regularly make you up to date<br />
                with our latest uploads.<br />
                
                This additional feature also gives you access to our partner sites in which you can get direct access.
               
        </p>
        
        <p><hr />So now what are you waiting for??<br />
                 Start unlimited Downloading and get awesome pictures and wallpapers.
        </p>
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
    
    <div id="left">
		
        <hr /> WHAT's NEW<hr />
        <br /><a href="nature.php"> &nbsp Nature Wallpapers</a><br /><hr />
        <br /><a href="flowers.php">&nbsp Flowers </a><hr />
        <br /><a href="superheroes.php">&nbsp Super Heroes</a><hr />
        <br /><a href="viratkohli.php">&nbsp Virat Kohli </a><hr />
        <br /><a href="sevenwonders.php">&nbsp Seven Wonders</a><hr />
        
	</div>





</body>
</html>
    <?php
session_start();
if(isset($_SESSION['abc']))
{
echo "you are login with your emailid:".$_SESSION['mail']."<br/>";
}  
else
{
    header("location:login.php");
}
if(isset($_POST['logout']))
 {
    session_destroy();
    header("location:login.php");
  }
?>