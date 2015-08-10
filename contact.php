<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Powered by EatFood | | Buckhead Atlanta Finest</title>
<link rel="stylesheet" href="css/output.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<header>
<p>2232 Eat Road | Atlanta GA 30060 | 678-324-0732 | Hours Sun-Sat 9am to 10pm</p>
<p><a href="scripts/php/survey.php">Take our Survey</a><p>
</header>
<div class="content">

<nav>
<img src="images/logo.png" id="logo" />
<ul id="topnav">
<li><a href="index.php" class="navs">Home</a></li>
<li><a href="about.php" class="navs">About</a></li>
<li><a href="menu.php" class="navs">Menu</a></li>
<li><a href="contact.php" class="navs">Contact</a></li>
</ul>
</nav> 

<section class="contact">
<form action="scripts/php/sendContact.php" method="post" class="STYLE-NAME">
    Contact Form Please fill all the texts in the fields.

    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="fname" placeholder="whats your name" />
    </label>
    
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="contactmail" placeholder="can we email you" />
    </label>
    
    <label>
        <span>Message :</span>
        <textarea id="message" name="msg" placeholder="say something...."></textarea>
    </label> 
     
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Send" /> 
    </label>    
</form>
</section>

<aside>

<p>678-324-0732</p>
<p>info@eatfood.com</p>
<p>2232 Eat Road Atlanta GA 30060</p> 

<img src="images/map.png" />





</aside>

</div>
<footer>
<form action="maillist.php" method="POST">
<input type="email" name="mail" placeholder="Join our mail List" />
<input type="submit" value="Submit" />

</form>
<p>2232 Eat Road | Atlanta GA 30060 | 678-324-0732</p>
<ul class="socIcons">
<li class="icons"><a href="http://www.facebook.com"><img src="images/soc/facebook.png" /></a></li>
<li class="icons"><a href="http://www.twitter.com"><img src="images/soc/twitter.png" /></a></li>
<li class="icons"><a href="http://www.instagram.com"><img src="images/soc/instagram.png" /></a></li>
</ul> 



</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="scripts/javascript/script.js"></script>
</body>
</html>