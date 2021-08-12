  <!DOCTYPE html>
<html>
<head>

</head>
<body>


<div style="width: 450px;
  height:  500px;
  border: 5px solid black;
  margin-left: 400px;">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="myForm"> 
  <h3 style="color: red;">Page 1 [Home]</h3>
  <h3 style="color: red;">Page 1 [Conversion Rate]</h3>
  <h3 style="color: red;">Conversion Site</h3>
  <p><a style="margin-left:30px;" href="page1.php">1.Home</a><a style="margin-left:10px;" href="page2.php">2.Conversion Rate</a><a style="margin-left:10px;" href="page3.php">3.History</a></p>
  
  
  <select type ="number" style="margin-left:30px;" id="conv" name = "conv">
    <option value="">Select</option>
    <option value="1">Feet to inch</option>
   
  </select>
  
<p>
  <label>Feet</label>
  <input id="inputFeet" type="number" placeholder="Feet">
</p>
<p>Inches: <span id="outputInches"></span></p>

  <button type="button" onclick="valid()">Submit</button>
  <p> <span id="selectEr"></span></p>
  <p><span id="inputEr"></span></p>
</form>
</div>

<script src="valid.js"></script>
</body>
</html>

