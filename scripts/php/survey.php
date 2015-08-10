<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Powered by EatFood | 5Q survey </title>
<link rel="stylesheet" href="css/output.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<h2>5 Questions Survey</h2>

<form action="process_survey.php" method="POST">
<p>1. Were you greeted at the door?
<select name="greetCus">
<option value="">choose</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</p>

<p>2. How was your server?
<select name="serverCus">
<option value="">choose</option>
<option value="Average">Average</option>
<option value="Good">Good</option>
<option value="Awesome">Awesome</option>
</select>
</p>

<p>3. How long did it take your food to get to you after ordering?
<select name="cookCus">
<option value="">choose</option>
<option value="ten">10 mins</option>
<option value="fifteen">15 mins</option>
<option value="twenty">20 mins</option>
</select>
</p>
<p>4. Was your restaurant,chair,table linen and utensils clean?
<select name="restCus">
<option value="">choose</option>
<option value="Yes">Yes</option>
<option value="Not">No</option>
</select>
</p>
<p>5. How was your food?
<select name="foodCus">
<option value="">choose</option>
<option value="Boring">Boring</option>
<option value="Great">Great</option>
<option value="Excellent">Excellent</option>
</select>
</p>
Email:<input type="email" name="custEmail" />

<p><input type="submit" value="Submit" /></p>



</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="scripts/javascript/script.js"></script>
</body>
</html>