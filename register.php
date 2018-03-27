<!DOCTYPE html>
<html>
<head>
  <title> Welcome to ANITS Blood Bank</title>

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div id="wrapper">
        <header>
          <p align="center"><h2><font color="red">Welcome To ANITS Blood bank !</font></h2></p>
    
        </header>
  
        <nav>   
         <ul class="nav">
              <li class=""><a href="home.html">Home</a></li>
              <li><a href="main.html">Hisory Of Blood</a></li>
              <li><a href="register.php">Register</a></li>
                <li><a href="why2.html">Why To Donate?</a></li>
                <li><a href="whoneed.html">Who Needs Blood?</a></li>
                <li><a href="contact.html">Contact Us</a></li>
          </ul>
            
        </nav>  
    
        <div class="right" > 
            <form name="sfrm"    id="border" method="post" action="doner.php" onsubmit="return iFormCheck();" style="margin:20px;">
              <div style="background: url(find.jpg) repeat-y; width:280px;">  
            <div style="height:300px;">
              <div style="padding: 30px 20px 0px 30px;">        
                <font class="headtxt">Find a Donor</font>
<br clear="all"><br>

        <div class="left" style="width:65px;">Group :</div><div class="left">
          <select name="bloodgroup2" value="" style="width:165px;" class="textbox">
              <option value="" selected> --- Select Group ---</option>
         <option value="A+" > A+      
          <option value="A-" > A-     
          <option value="B+" > B+ 
          <option value="B-" > B-   
            <option value="O+" > O+<option value="O-" > O-      <option value="AB+" > AB+     <option value="AB-" > AB-       </select></div><br clear="all"><br>

        </div>

        <div class="right" style="margin:10px;>
          <input type="hidden" name="search">
         <div style="a"></div>>
          <input type="image" src="search.jpg" width="60" height="23" border="0" alt="" >
        </div>
      </div>
    </div>
  </form>
  </div>
<div class="left" style="width:563px;">
  <div class="left" style="width:561px;border:1px solid #D7D7D7;border-top:0px;border-bottom:0px;">
    <div class="left" style="width:561px;">
            <div ><p style="padding-top:10px;padding-left:10px;"><font class="headtxt">Donor Registration</font></p></div>

       <div class="left" style="padding-left:20px;">
        
<div id="form">
        <form name="f1" action="insert.php"  method="post" style="margin:0px;">
        
          <div style="padding:10px;"><span><font class="boldtxt" name="name">Name<font class="formclr" style="color:red">*</font> :</font></span><br><input type="text" name="name" tabindex="1" value="" class="textbox" size="30" maxlength="40" required >
          </div>

 <div style="padding:10px;"><span><font class="boldtxt" name="num">Registration number<font class="formclr"  style="color:red">*</font> :</font></span><br><input type="text" name="num" tabindex="1" value="" class="textbox" size="30" maxlength="40" required <?php $value = "+12345655539997";
 //echo phone_validation($value);
// mobile number validation
 if(!preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{10})$/', $value) ) {
 echo 'Please enter a valid phone number';
 }else{
 echo "valid";
 }?>>
          </div>

 <div style="padding:10px;"><span><font class="boldtxt" name="address">Address<font class="formclr"  style="color:red">*</font> :</font></span><br><input type="text" name="address" tabindex="1" value="" class="textbox" size="30" maxlength="40" required="">
          </div>

 <div style="padding:10px;"><span><font class="boldtxt">Gender<font class="formclr"  style="color:red">*</font> :</font><br></span><input type="radio" name="gender" value="F" tabindex="8" >Female<br><input type="radio" name="gender" value="M" tabindex="9"  required="">Male</div>

 <div style="padding:10px;">

  <font class="boldtxt">year<font class="formclr"  style="color:red">*</font> :</font><br></font>
<select style="width:100px;" class="smalltxt textbox" name="year" size="1" tabindex="5">
<option value="-1" selected>select..</option>
  <option value="first year">frist year</option>
  <option value="second year">second year</option>
  <option value="third year">third year</option>
  <option value="fourth year">fourth year</option>
  </select>

</div>



<div style="padding:10px;">
<span><font class="boldtxt">section<font class="formclr"  style="color:red">*</font> :</font><br></span>

<select  style="width:100px;" class="smalltxt textbox"  size="1" tabindex="5" name="section" required="">
<option value="-1" selected >select..</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
   </select>
  
</div>

<div style="padding:10px;"><span><font class="boldtxt">EmailId <font class="formclr"  style="color:red">*</font> :</font><br></span>
  <input type="text" name="email"  size="30" required=""></div>

  <div style="padding:10px;">
    <span><font class="boldtxt">  Date Of Birth: 
    <input type="date"  name="dob" >
  </div>

  <div style="padding:10px;"><span><font class="boldtxt">MobileNo<font class="formclr"  style="color:red">*</font> :</font><br></span>
  <input type="text" name="mobile" size="30" required="10"></div>
<br>

  <div style="padding:10px;padding-top:1px;"><span><font class="boldtxt">Blood Group<font class="formclr"  style="color:red">*</font> </font></span><br>
            <select style="width:100px;" tabindex="10" class="smalltxt textbox" name="bgroup" size="1" tabindex="20" required="">
              <option value="">Select
      <option value="A+" > A+      
          <option value="A-" > A-     
          <option value="B+" > B+ 
          <option value="B-" > B-   
            <option value="O+" > O+<option value="O-" > O-      <option value="AB+" > AB+     <option value="AB-" > AB-         </select>
          </div>
        
      <br>

<div align="center"  style="border-radius: 25px";>
      <input type="image" src="register.jpg" width="100" height="40" border="0" alt=""  ></div><br clear="all"><br>
      </div>

  



    </div> 
</font>