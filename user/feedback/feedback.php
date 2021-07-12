

<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 
<style>
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif;  font-size:15px; background-image: url('bg-11.png'); padding:100px;   max-width: 500px;}
.form_box{width:500px; padding:10px; background-color:white; }
input{padding:5px;  margin-bottom:5px; align:center;}
input[type="submit"]{border:none; outlin:none; background-color:#da7dc2; color:white;}
.heading{background-color:#e22a95; color:white; height:40px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{ width:33%; float:left; text-align: center;}
</style>

</head>



<body>

 <div class="form_box shadow">
 <form method="post" action="practice_ac.php?orderID=<?php echo $_GET['orderID'];?>" position="center">
 <div class="heading">
   Salon AURA - Feedback Form 
 </div>
 <br/>
 <p>What do you think about the beautician's service?</p>
 <div>
   <div class="pic">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="pic">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>
 </div>
 <br><br><br> <br><br><br> 

 <p>What do you think about the treatment?</p>
 <div>
   <div class="pic">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="treatment" value="0"> Bad
   </div>
   <div class="pic">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="treatment" value="1"> Okay
   </div>
   <div class="pic">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="treatment" value="2"> Good
   </div>
 </div>
 <br><br><br> <br><br><br> 

 <p>What do you think about the quality of product?</p>
 <div>
   <div class="pic">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="product" value="0"> Bad
   </div>
   <div class="pic">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="product" value="1"> Okay
   </div>
   <div class="pic">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="product" value="2"> Good
   </div>
 </div>
 <input type="hidden" id="Id" name="Id" value=<?php echo $_GET['orderID'] ?>>
  <br><br><br> <br><br><br> 
 
 <p>Do you have any suggestion for us? </p>
 <textarea name="suggestion" rows="8" cols="40"></textarea>
 <br><br>
  <input type="submit" name="submit" value="Submit Form">
<a href=".../order-history.php">Back</a>
</form>
 </div>
</body>
</html>