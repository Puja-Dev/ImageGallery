<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
	<link rel="stylesheet" type="text/css" href="external.css"/>
    <script type="text/javascript">
        function FormValid()
    {
        var res=true;
        var val=document.frm.abc.value;
         if(val=="")
        {
            document.getElementById("a").innerHTML="*";
             res=false;
        }
        else
        {
            document.getElementById("a").innerHTML="";
         }
        
      
      
        var val=document.frm.xyz.value;
        if(val=="")
        {
            document.getElementById("a1").innerHTML="*";
             res=false;
       
        }
      else
        {
             document.getElementById("a1").innerHTML="";
        
        }
        
     
     
        var val=document.frm.pwd.value;
        if(val=="")
      {
            document.getElementById("b").innerHTML="*";
             res=false;
       }
      else
      {
            document.getElementById("b").innerHTML="";
       } 
       
       
       
       var val=document.frm.pwd1.value;
      if(val=="")
      {
          document.getElementById("b1").innerHTML="*";
             res=false;
       }
      else
     {
            document.getElementById("b1").innerHTML="";
       } 
        
        
        var pwd_reg=/(?=.*[a-z])(?=.*[0-9])(?=.*[@_#])[a-z0-9@_#]/;
        if(pwd_reg.test(val))
        document.getElementById("b").innerHTML="";
        else
        {
        document.getElementById("b").innerHTML="*";
        res=false;
        }
        
         var pwd1_reg=/(?=.*[a-z])(?=.*[0-9])(?=.*[@_#])[a-z0-9@_#]/;
        if(pwd1_reg.test(val))
        document.getElementById("b1").innerHTML="";
        else
        {
        document.getElementById("b1").innerHTML="*";
        res=false;
        }
       
        
        var val=document.frm.mail.value;
    if(val=="")
      {
        document.getElementById("c").innerHTML="*";
       res=false;
       
       }
      else{
        document.getElementById("c").innerHTML="";
        
        }
        
        
        if(document.frm.r1[0].checked||document.frm.r1[1].checked)
        {
            document.getElementById("d").innerHTML="";
        }
        else
        {
        document.getElementById("d").innerHTML="*";
     res=false;
       }
      
       return res;
      } 
       
      function checkkey(event)
    {
    if(event.keyCode>=48 && event.keyCode<=57)
    return true;
    else
    return false;
    }


    function PwdStr()
    {
    var v=document.frm.pwd.value.length;
    if(v<=4)
    {
        document.getElementById("b").innerHTML="<font color=red>Week Password..</font>";
    }
    else if(v>4 && v<=8)
      {
        document.getElementById("b").innerHTML="<font color=green>Password is ok... </font>";
    }
    else if(v>8 && v<=15)
    {
        document.getElementById("b").innerHTML="<font color=green>Password is strong...</font>";
    }    
    }
    
    
    function PwdStr1()
    {
        var v=document.frm.pwd1.value.length;
         if(v<=4)
         {
        document.getElementById("b1").innerHTML="<font color=red>Week Password..</font>";
            }
         else if(v>4 && v<=8)
        {
        document.getElementById("b1").innerHTML="<font color=green>Password is ok... </font>";
         }
        else if(v>8 && v<=15)
        {
        document.getElementById("b1").innerHTML="<font color=green>Password is strong...</font>";
         }    
    }
</script>
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
 


<form name="frm" action="signup.php" method="POST" onsubmit="return FormValid()">

<main id="sign">
<fieldset>
        <legend align=center><strong><h2>SIGN-UP</h2></strong></legend>
<br /><br />

<div id="signup">
	 
		<h3>Account</h3>
		<hr/>

<table class="table">
<table width="100%">
<tr><td>First Name: </td><td><input type="text" name="abc" placeholder="enter first name" /><font color=red id="a"></font></td></tr>
<tr><td>Last Name:</td><td><input type="text"name="xyz" placeholder="enter last name"/><font color=red id="a1"></font></td></tr>
<tr><td>Email :</td><td><input type="email" name="mail" placeholder="amit@gmail.com"/><font color=red id="c"></font></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd" onkeyup="PwdStr()"/><font color=red id="b"></font></td><td><font color=red>Hint:password should contain atleast one alphabet,one numeral and one sign (@, _or #)</font></td></tr>
<tr><td>Re-enter Password:</td><td><input type="password" name="pwd1" required="" onkeyup="PwdStr1()"/><font color=red id="b1"></font></td></tr>
<tr><td>Date of birth:</td><td><input type="date" name="dob"/></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="r1" value="Male"/>Male<input type="radio" name="r1" value="Female"/>Female<font color=red id="d"></font></td></tr>
</table>
<table><h3>Contact details</h3><hr/>
<tr><td>Mobile No.:</td><td><input type="text" name="mob" placeholder="+91" maxlength="13"onkeypress="return checkkey(event)"/></td></tr>
</table> <hr/>
 <table><tr><td><input type="checkbox" required=""/>I here-by , accept all Terms and Conditions</td></tr>
  <tr><td><input type="submit" name="signup" value="Submit" id="submit"/></td></tr>
  
  </form>
  
  </table>
  <br /><br />

  </div>

</fieldset>


<?php
  if(isset($_POST['signup']))
  { 
    
     $list=mysqli_connect("localhost","root","","media");
    $qry="select U_mail from account";
    $resultset=mysqli_query($list,$qry);
    if(strcmp($resultset,$_POST['mail'])!=0)
        {
            echo "This email id already exists. Register with new address";
            }
    else
    {
    if((strcmp($_POST['pwd'],$_POST['pwd1']))!=0)
    {
        echo "password does not match.Please enter password correctly";
    }
    else
    {
    $user=$_POST['abc'];
    $user2=$_POST['xyz'];
    $pass=$_POST['pwd'];
    $pass1=$_POST['pwd1'];
    $mail=$_POST['mail'];
    $birth=$_POST['dob'];
    $gender=$_POST['r1'];
    $mobile=$_POST['mob'];
    
   
   
        $list=mysqli_connect("localhost","root","","media");
    
     $qry="insert into account(Fname,Lname,U_password,U_email,U_dob,U_gender,U_contact) values('$user','$user2','$pass','$mail','$birth','$gender','$mobile')";

        $res=mysqli_query($list,$qry);
    
        if($res)
         {
            echo "Now You are successfully registered."."click<a href=logedin.php>LOG IN</a>";
             
             }
            else{
                echo "records are not inserted.try again";
            }

    }
    
    
}
}

  ?>


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