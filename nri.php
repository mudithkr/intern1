<?php
require('./header.php');
  ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);  
?>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./CSS/bundle.min.css">
	<link rel="stylesheet" href="./CSS/reset.css"> 
	<link rel="stylesheet" href="./CSS/style.css"> 
	<link rel="stylesheet" href="./CSS/style(2).css"> 
	<script src="JS/modernizr.js"></script> <!-- Modernizr -->
  	
	<title><?php
 				$pid=$_GET['id'];
				$quer = mysqli_query($p,"SELECT * FROM  WHERE id='".$pid."'");
      			$row = mysqli_fetch_array($quer);
      			echo ''.$row['head']. '' ;
      		?></title>
</head>
<body>
	<header class="cd-header">
		<div id="cd-logo"><a href="#0"><img src="images/logo_1_small.png" alt="Logo"></a></div>

		<nav class="cd-main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a href="index.php">Home</a></li>
			</ul>
		</nav> <!-- cd-main-nav -->
	</header>

	<section id="cd-intro">
		<div id="cd-intro-background"></div>
		<div id="cd-intro-tagline">
			<?php
 				$pid=$_GET['id'];
				$quer = mysqli_query($p,"SELECT * FROM  WHERE id='".$pid."'");
      			$row = mysqli_fetch_array($quer);
      			echo '<h1>'.$row['head']. '</h1>' ;
      		?>
		</div> <!-- cd-intro-tagline -->
	</section> <!-- #cd-intro -->

	<main class="cd-content">
		<div class="cd-container">
			<?php
      			echo	'<div class="row">
	        <div class="col s12">
	        <h6 class="light half-line">' .$row['description']. '</h6>
	        </div></div>';
	  		?>	  
		
		<div class="comments">						
						<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//.disqus.com/count.js" async></script>
    </div>
	</main> <!-- cd-content -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="JS/main.js"></script> <!-- Resource jQuery -->
</div>

  <footer class="page-footer">
    <div class="container">
    <div class="footer-copyright">
      Copyright © 2016 . All rights reserved.<span style="float:right">Beta Version</span>
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: THIS CODE IS ONLY AN EXAMPLE * * */
    var disqus_shortname = ''; // Required - Replace example with your forum shortname
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
</html>