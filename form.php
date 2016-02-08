<!DOCTYPE html>
<html lang="en">
<head>
  <title>247 around</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  function message()
  {
    alert("Welcome "+document.getElementsByName('name')[0].value);
  }
  </script>

</head>
<body>
<h4><b>
<marquee scrollamount="6">Download the new <a href="https://play.google.com/store/apps/details?id=com.bt.bms&hl=en" target="_blank"> Bookmyshow </a> app </marquee>
</h4><br>
<div class="container">
<img class="logo" src="logo.png" width="400" height="120" >
  <form role="form" action="form.html" method="request" onsubmit="return message()">
    <div class="form-group ">
      Name:
      <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-group ">
      Mobile :
      <input type="text" pattern="[789][0-9]{9}" class="form-control" name="mobile" placeholder="Enter mobile no." required>
    </div>
    
    <div class="form-group ">
      Email:
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>
    <?php
      $movie=array("Airlift","Furious","Twilight","Cage","Holiday","Quantico","Katti Batti","NH10","San Andreas");
      $city=array("Agra","Bangalore","Chandigarh","Delhi-NCR","Kanpur","Lucknow","Nagpur","Pune","Trivandrum");
      $cinema=array("Big Cinemas","INOX","JAM","PVR","SRS-Aditya","SRS-Jaipuria","Vision");
?>
 <div class="form-group ">
Movie:
</b>
<br>
<select name="category1"> 
<option value="" ></option>
<option selected="selected">Airlift</option>
<?php 
    
    foreach($movie as $movie) 
    {
       echo '<option value="'. $movie .'">'. $movie .'</option>';
    }
?>
</select>
</div>
<div class="form-group ">
<b>
Cinema:
</b>
<br>
<select name="category2">
<option value=""></option>
<option selected="selected">INOX</option>
<?php 
    foreach($cinema as $cinema) 
    {
         echo '<option value="'. $cinema .'">'. $cinema .'</option>';
    }
?>
</select>
</div>
<div class="form-group ">
<b>City:
</b>
<br>
<select name="category3">
<option value=""></option>
<option selected="selected">Delhi-NCR</option>
<?php 
    foreach($city as $city) 
    {
       echo '<option value="'. $city .'">'. $city .'</option>';
    }
?>
</select>
</div>
<b>
 <div class="checkbox">
      <input type="checkbox" class="form-group">Remember me
    </div>
    <button type="submit" class="form-control btn btn-success">Submit</button>
  </form>
</div>
</b>
</body>
</html>
