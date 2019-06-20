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
<link rel="stylesheet" type="text/css" href="external.css" />
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
				<td align=center><a href="aboutus.php"  title="Info">About US</a></td>
				<td align=center><a href="contactus.php">Contact Us</a></td>
				<td align=center><a href="signup.php" title="SIGN UP">SIGN UP</a></td>
				<td align=center><a href="login.php" title="Log In">LOG IN</a></td>
			</tr>
		</table> 
	</nav>
    
    
	<div id="left">
		<hr /> WHAT's NEW<hr />
        <br /><a href="nature.php"> Nature Wallpapers</a><br /><hr />
        <br /><a href="flowers.php"> Flowers </a><hr />
        <br /><a href="superheroes.php"> Super Heroes</a><hr />
        <br /><a href="viratkohli.php"> Virat Kohli </a><hr />
        <br /><a href="sevenwonders.php"> Seven Wonders</a><hr />
        
	</div>
	
    
    
    
	<main>
		  
        <hr color=white size=20/>
        
        <h1><b><font color=red><center>The Image Gallery</center></font></b></h1>
        
        <table align=center border=5><tr><td><h3><b>~IMAGE~GALLERY~</b></h3></td></tr></table>
        
        <hr color=white size=20/>
        <br /><br /><br />
        
        
        <p><h2>We have the best collection of the pictures, wallpapers you are looking for.<br /> So what are you waiting for !! <u>Download the Best Quality Pictures</u></h2></p>
        <br /><br /><br />
        
        
        <hr /><h2><marquee behavior=alternate onmouseover=stop() onmouseout=start()>Check out at WHAT's NEW</marquee></h2><hr />
        
        <br /><br />
          <table border=2 border-color=black align=center>
                <tr>
                        <td><img src="nature/Backgrounds-Landscape-pictures.jpg" width="400" height="400" /></td>
                </tr>
                
                <tr>
                        <td colspan="2">Download File: 
                        
                                    <?php   
                                    
                                    $handle=opendir("./n1");

                                        while($file=readdir($handle))
                                        
                                        {
                                            if(!($file=="." || $file==".."))
                                            
                                            echo "<a href='ndownload.php?name=$file'>$file</a>";
                                        }
                                        
                                        closedir($handle); 
                                    ?>
                        </td>
                </tr>
                
                
                
          </table>
         
         
         <br />
         <br />
         <br />
         
         
         
         
         
         
 
                        
                         <hr />
                         
                         <center> <a href=homepage.php title=Home Page>Home</a>&nbsp&nbsp&nbsp
                          <a href=contactus.php title=Contact Us>Contact Us</a>&nbsp&nbsp&nbsp
                          <a href=aboutus.php title=About Us>About Us</a> 
                          <br />           
                          <br/>COPYRIGHTS &copy 2016 (~IMAGE~GALLERY~). ALL RIGHTS RESERVED.
                          <br /><br />
                          <b><font color=#6D8484>DESIGNED BY :</font> <font color=#031211><marquee behavior=right onmouseover=stop() onmouseout=start()> Pooja Devlal, Lalit Punera, Prachi Sharma, Prakriti Bawa</marquee> </font></b></center>
                          
                        
        
 
         
                
	</main>	
    
    	
</body>
</html> 