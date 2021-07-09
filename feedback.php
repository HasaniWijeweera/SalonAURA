
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif;  font-size:15px; background-image: url('bg-11.png'); padding:100px;   max-width: 500px; }
.form_box{width:500px; padding:10px; background-color:transparent; }
input{padding:5px;  margin-bottom:5px; align:center;}
input[type="submit"]{border:none; outlin:none; background-color:#da7dc2; color:white;}
.heading{background-color:#e22a95; color:white; height:50px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{ width:33%; float:left; text-align: center;}
</style>

<body>
<?php include('../user/includes/userheader3.php');?>
 <div class="form_box shadow">
 <form method="post" action="practice_ac.php" >
 <div class="heading">
   Salon AURA - Feedback Form 
 </div>
 <br/>
 <p>What do you think about t beautician's service?</p>
 <div>
   <div class="pic1">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="beauty" value="0"> Bad
   </div>
   <div class="pic1">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="beauty" value="1"> Okay
   </div>
   <div class="pic1">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="beauty" value="2"> Good
   </div>
 </div>
 <br><br><br> <br><br><br> 

 <p>What do you think about the treatment?</p>
 <div>
   <div class="pic2">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="treat" value="0"> Bad
   </div>
   <div class="pic2">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="treat" value="1"> Okay
   </div>
   <div class="pic2">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="treat" value="2"> Good
   </div>
 </div>
 <br><br><br> <br><br><br> 

 <p>What do you think about the quality of product?</p>
 <div>
   <div class="pic3">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="pic3">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic3">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>
 </div>

  <br><br><br> <br><br><br> 
 
 <p>Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>
 <br><br>
  <input type="submit" name="submit" value="Submit Form">
</form>
 </div>
</body>
</html>