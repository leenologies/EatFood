<?php

spl_autoload_register(function($name){
   include scripts/php/$name.'.php';
  });
  
  include 'scripts/php/header.php';


<section class="slider">


<img src="images/slider1.jpg" />
<img src="images/slider2.jpg" />
<img src="images/slider3.jpg" />
<img src="images/slider4.jpg" />


</section>

<article>
<img src="images/chef.jpg" />
<p>
Meet our Chef Jon R our coach leader. Text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<img src="images/awards.jpg" />
<p>
Our Awards says excellent live food. The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<img src="images/feedback.jpg" />
<p>
Give your Feed back very important to us.For the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
</article>

<section id="wholesellers">
<p>&#147;Where your food comes from&#148;</p>
<ul class="logos">
<li class="log"><img src="images/whole/logo1.jpg"</li>
<li class="log"><img src="images/whole/logo2.jpg"</li>
<li class="log"><img src="images/whole/logo3.jpg"</li>
<li class="log"><img src="images/whole/logo4.jpg"</li>
<li class="log"><img src="images/whole/logo5.jpg"</li>
<li class="log"><img src="images/whole/logo6.jpg"</li>


</ul>

</section>

<section id="mission">
<h2>Our Mission</h2>
<p>
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.and going through the cites of the word in classical.
</p>
</section>
</div>

 include 'scripts/php/footer.php';

?>